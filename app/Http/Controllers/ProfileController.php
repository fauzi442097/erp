<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\Response;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Hash, DB, Storage;
use Log;

class ProfileController extends Controller
{
    use Response;

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function index(Request $request): View
    {
        return view('profile.index', []);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'avatar' => ['nullable', 'file', 'mimes:png,jpg,jpeg', 'max:10240'],
            'name' => ['required', 'min:3', 'max:255', 'regex:/^[\pL\s\'\-\.\,]+$/u'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore(auth()->user()->id),
            ],
        ], [
            'name.regex' => "Nama hanya boleh mengandung huruf, spasi, apostrof ('), dan tanda hubung (-), serta gelar yang sah (misal: Dr., M.Sc.).",
            'email.unique' => 'Email sudah digunakan'
        ]);

        if ($validate->fails()) {
            return $this->badRequest('Bad Request', $validate->errors());
        }

        DB::beginTransaction();

        try {
            $user = auth()->user();
            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->hasFile('avatar')) {
                if ($user->photo_url) {
                    Storage::disk('public')->delete($user->photo_url);
                }

                $path = $request->file('avatar')->store('profile', 'public');
                $user->photo_url =  $path;
            }

            $user->save();
            DB::commit();
            return $this->success('Profile berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->error('Terjadi kesalahan');
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updatePassword(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'currentpassword' => ['required', 'min:5'],
            'newpassword' => ['required', 'min:5', 'regex:/^[^\s]*$/']
        ], [
            'newpassword.regex' => 'Password tidak boleh mengandung spasi.',
        ]);

        if ($validate->fails()) {
            return $this->badRequest('Bad Request', $validate->errors());
        }

        if (!Hash::check($request->currentpassword, auth()->user()->password)) {
            return $this->warning('Password saat ini yang anda masukan tidak sesuai');
        }

        $user = auth()->user();
        $user->password = bcrypt($request->newpassword);
        $user->save();
        return $this->success('Password berhasil diupdate');
    }
}
