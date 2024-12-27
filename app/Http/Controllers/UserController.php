<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Response;
use Illuminate\View\View;

use DB;
use DataTables;

class UserController extends Controller
{
    use Response;

    public function index(Request $request): View
    {
        return view('users.index', []);
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
}
