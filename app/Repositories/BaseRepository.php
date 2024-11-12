<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function find(int $id)
    {
        return $this->model::find($id);
    }

    public function store(array $data)
    {
        return $this->model::create($data);
    }

    public function update(int $id, array $data)
    {
        $model = $this->model::find($id);

        if ($model) {
            $model->update($data);
            return $model;
        }

        return null;
    }

    public function destroy($id)
    {
        return $this->model::destroy($id);
    }
}
