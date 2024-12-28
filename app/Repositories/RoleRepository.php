<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{

    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function getDataById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $role = $this->getDataById($id);
        $role->update($data);
        return $role;
    }
}
