<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Traits\Response;

use DB;
use DataTables;

class UserController extends Controller
{
    use Response;
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request): View
    {
        $param['roles'] = Role::all();
        return view('setting.users.index', $param);
    }

    public function getData(Request $request)
    {
        return $this->userService->getDatatable($request);
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return $this->success('User berhasil dihapus');
    }


    public function activeDeactiveUser(Request $request, User $user)
    {
        $isSuspended = $request->active == "1";
        $user->suspended = $isSuspended ? false : true;
        $user->save();

        $label = $isSuspended ? 'diaktifkan' : 'dinonaktifkan';
        return $this->success('User berhasil ' .  $label);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'avatar' => ['nullable', 'file', 'mimes:png,jpg,jpeg', 'max:512'],
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

        return $this->userService->store($request);
    }

    public function show(Request $request, User $user)
    {
        $user->load('roles');
        $user->full_photo_url = $user->photo_url ? asset($user->photo_url) : null;
        return $this->success('Sukses', $user);
    }

    public function restoreUser(Request $request, $userId)
    {
        $user = User::withTrashed()->find($userId);
        if (!$user) return $this->warning('User tidak ditemukan');
        $user->restore();
        return $this->success('User berhasil direstore');
    }
}
