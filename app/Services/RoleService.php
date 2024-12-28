<?php

namespace App\Services;

use App\Traits\Response;
use App\Repositories\RoleRepository;

use DB;
use Log;


class RoleService
{
    use Response;
    protected $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    public function storeAndAssignMenu($request)
    {
        $arrData = $request->all();
        $dataRole['name'] = $arrData['role_name'];

        DB::beginTransaction();
        try {

            if (is_null($arrData['role_id'])) {
                $role = $this->roleRepository->create($dataRole);
            } else {
                $role = $this->roleRepository->update($arrData['role_id'], $dataRole);
            }

            $role->menus()->sync($arrData['menus']); // Use sync() to update the assigned menus
            DB::commit();

            return $this->success('Data berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->error('Terjadi kesalahan');
        }
    }
}
