<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Traits\Response;

use App\Models\Role;

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

    public function getDatatable()
    {
        $users = $this->userRepository
            ->getInitWithRelationship(['roles'])
            ->select('users.*')
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
            ->addColumn('actions', function ($user) {
                $setActive = false;
                $labelAktif = 'Non Aktif';
                if ($user->suspended) {
                    $setActive = true;
                    $labelAktif = 'Aktif';
                }
                return view('setting.users.datatables.actions', compact('user', 'setActive', 'labelAktif'))->render();
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
                'email' => $request->email,
                'password' => bcrypt('Admin@123123')
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
                $user = $this->userRepository->store($dataUser);
            } else {
                $user = $this->userRepository->update($request->user_id, $dataUser);
            }

            // Assign Role
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
}
