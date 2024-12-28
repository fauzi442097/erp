<?php


namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getInitWithRelationship(array $relations = [])
    {
        $query = $this->model::query();

        if (!empty($relations)) {
            $query->with($relations);
        }

        return $query;
    }

    public function getDataById($id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $user = $this->getDataById($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = $this->getDataById($id);
        return $user->delete();
    }
}
