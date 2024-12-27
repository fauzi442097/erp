<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use App\Traits\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


use DB;
use DataTables;
use Log;



class UserController extends Controller
{
    use Response;

    public function index(Request $request): View
    {
        $param['roles'] = Role::all();
        return view('users.index', $param);
    }

    public function getData(Request $request)
    {
        $users = User::with('roles')->select('users.*')->orderBy('id', 'DESC');

        return DataTables::of($users)
            ->addColumn('status', function ($user) {
                if (!$user->suspended) {
                    return '<span class="badge badge-light-success">Aktif</span>';
                }
                return '<span class="badge badge-light-danger">Non Aktif</span>';
            })
            ->editColumn('photo_url', function ($user) {
                $urlImg = $user->photo_url ? asset($user->photo_url) : 'assets/media/svg/avatars/blank.svg';
                return '<div class="overflow-hidden symbol symbol-circle symbol-40px me-3">
                            <div class="symbol-label">
                                <img src="' . $urlImg . '" alt="Photo ' . $user->name . '" class="w-100" style="object-fit: cover"  />
                            </div>
                        </div>';
            })
            ->addColumn('role', function ($user) {
                return $user->roles()->exists() ? $user->roles[0]->name : '';
            })
            ->rawColumns(['photo_url', 'status'])
            ->make(true);
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return $this->success('User berhasil dihapus');
    }

    public function activeDeactiveUser(Request $request, User $user)
    {
        $isSuspended = $request->active === "true";
        $user->suspended = $isSuspended ? false : true;
        $user->save();

        $label = $isSuspended ? 'diaktifkan' : 'dinonaktifkan';
        return $this->success('User berhasil ' .  $label);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'avatar' => ['nullable', 'file', 'mimes:png,jpg,jpeg', 'max:10240'],
            'name' => ['required', 'min:3', 'max:255', 'regex:/^[\pL\s\'\-\.\,]+$/u'],
            'role' => ['required'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                $request->action_type == 'update' ? Rule::unique('users')->ignore($request->user_id) : Rule::unique(User::class)
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

            if ($request->action_type == 'create') {
                $user = new User;
            } else {
                $user = User::find($request->user_id);
            }

            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->hasFile('avatar')) {
                if ($user->photo_url) {
                    Storage::disk('public')->delete($user->photo_url);
                }

                $path = $request->file('avatar')->store('profile', 'public');
                $user->photo_url =  $path;
            }

            $user->password = bcrypt('Admin@123123');
            $user->save();

            $role = Role::find($request->role);
            $user->syncRoles([$role->name]);

            DB::commit();
            return $this->success('Profile berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->error('Terjadi kesalahan');
        }
    }

    public function show(Request $request, User $user)
    {
        $user->load('roles');
        $user->full_photo_url = $user->photo_url ? asset($user->photo_url) : null;
        return $this->success('Sukses', $user);
    }
}
