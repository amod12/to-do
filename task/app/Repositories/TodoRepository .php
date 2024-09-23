<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Models\User;


class TodoRepository implements TodoRepositoryInterface
{
    public function all()
    {
        return auth()->user()->todos;
    }

    public function create(array $data)
    {
        return auth()->user()->todos()->create($data);
    }

    public function find($id)
    {
        return auth()->user()->todos()->findOrFail($id);
    }

    public function update($id, array $data)
    {
        $todo = $this->find($id);
        $todo->update($data);
        return $todo;
    }

    public function delete($id)
    {
        $todo = $this->find($id);
        return $todo->delete();
    }
}
