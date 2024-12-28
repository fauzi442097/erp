<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\MenuRepository;
use Illuminate\Support\Facades\Validator;

use App\Models\Role;
use App\Services\RoleService;
use App\Traits\Response;


class RoleController extends Controller
{
    use Response;
    protected $menuRepository;
    protected $roleService;

    public function __construct(MenuRepository $menuRepo, RoleService $roleService)
    {
        $this->menuRepository = $menuRepo;
        $this->roleService = $roleService;
    }

    public function index(Request $request)
    {
        $roles = Role::with(['menus' => function ($query) {
            $query->whereNull('parent_id')->with('subMenu');
        }])
            ->withCount('users')
            ->orderBy('name', 'ASC')
            ->get();


        return view('setting.roles.index', compact('roles'));
    }

    public function form(Request $request, $action, $id = null)
    {
        $menus = $this->menuRepository->getMenuHierarchy();

        $role = null;
        if ($id) {
            $role = Role::with('menus')->where('id', $id)->first();
        }

        $param['menus'] = $menus;
        $param['action'] = $action;
        $param['pageTitle'] = $action == 'create' ? 'Tambah Role' : 'Ubah Role';
        $param['id'] = $id;
        $param['role'] = $role;
        return view('setting.roles.form', $param);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'role_name' => ['required', 'min:2', 'max:30'],
        ]);

        if ($validate->fails()) {
            return $this->badRequest('Bad Request', $validate->errors());
        }

        return $this->roleService->storeAndAssignMenu($request);
    }
}
