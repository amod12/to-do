<?php

namespace App\Http\Controllers;

use App\Repositories\TodoRepositoryInterface;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function index()
    {
        $todos = $this->todoRepository->all();
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['title' => 'required']);
        $this->todoRepository->create($data);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(['title' => 'required']);
        $this->todoRepository->update($id, $data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->todoRepository->delete($id);
        return redirect()->back();
    }
}

