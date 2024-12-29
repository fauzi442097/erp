<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


use App\Repositories\UserRepository;
use App\Mail\WelcomeNewUser;
use App\Traits\Response;

use App\Models\Role;
use App\Helper\Helper;

use DB;
use Log;
use Storage;
use DataTables;


class UserService
{
    use Response;
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getDatatable($request)
    {
        $userType = $request->type;


        $users = $this->userRepository
            ->getInitWithRelationship(['roles'])
            ->select('users.*')
            ->when($userType == 'deleted', function ($query) {
                return $query->onlyTrashed();
            })
            ->orderBy('id', 'DESC');

        return DataTables::of($users)
            ->addColumn('status', function ($user) {
                return view('setting.users.datatables.status', compact('user'))->render();
            })
            ->editColumn('photo_url', function ($user) {
                return view('setting.users.datatables.photo_url', compact('user'))->render();
            })
            ->addColumn('role', function ($user) {
                return $user->roles()->exists() ? $user->roles[0]->name : '';
            })
            ->editColumn('deleted_at', function ($user) {
                if ($user->deleted_at) {
                    return date('d-m-Y H:i', strtotime($user->deleted_at));
                }
                return '';
            })
            ->addColumn('actions', function ($user) use ($userType) {
                $setActive = false;
                $labelAktif = 'Non Aktif';
                if ($user->suspended) {
                    $setActive = true;
                    $labelAktif = 'Aktif';
                }
                return view('setting.users.datatables.actions', compact('user', 'setActive', 'labelAktif', 'userType'))->render();
            })
            ->rawColumns(['photo_url', 'status', 'actions'])
            ->make(true);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $dataUser = [
                'name' => $request->name,
                'email' => $request->email
            ];

            if ($request->hasFile('avatar')) {
                $isUpdate = $request->action_type == 'update';
                if ($isUpdate) {
                    $currentUser = $this->userRepository->getDataById($request->user_id);
                    if ($currentUser->photo_url) {
                        Storage::disk('public')->delete($currentUser->photo_url);
                    }
                }

                $path = $request->file('avatar')->store('profile', 'public');
                $dataUser['photo_url'] = $path;
            }

            if ($request->action_type == 'create') {
                $newPassword = Helper::generatePassword();
                $dataUser['password'] = bcrypt($newPassword);
                $user = $this->userRepository->store($dataUser);

                // Send email new user
                $user->password_plain = Helper::generatePassword();
                Mail::to($user->email)->send(new WelcomeNewUser($user));
            } else {
                $user = $this->userRepository->update($request->user_id, $dataUser);
            }

            // Assign Role
            $role = Role::find($request->role);
            $user->syncRoles([$role->name]);

            DB::commit();
            return $this->success('Data berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->error('Terjadi kesalahan');
        }
    }
}
