<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository{
    protected $model = null;

    protected function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getById(int $id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function getAll()
    {
        return $this->model->get();
    }


    public function create(...$params)
    {
        return $this->model->create(...$params);
    }

    public function update($attrs)
    {
        return $this->model->update($attrs);
    }

}