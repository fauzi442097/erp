<?php

namespace App\Http\Controllers;

use App\Traits\Response;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;


use Hash;

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
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
