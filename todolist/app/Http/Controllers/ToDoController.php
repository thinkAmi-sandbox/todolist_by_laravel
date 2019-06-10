<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveToDo;
use App\ToDo;
use Illuminate\Support\Facades\Redirect;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::latest('id')->get();

        return view('todo.list', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(SaveToDo $request)
    {
        $target = new ToDo;
        $target->title = $request->input('title');
        $target->content = $request->input('content');
        $target->priority = $request->input('priority');
        $target->save();

        // save()後、$todoには保存したときのidがセットされる
        return Redirect::route('todo.show', ['todo' => $target]);
    }

    public function show(int $id)
    {
        return view(
            'todo.detail',
            ['todo' => ToDo::where('id', $id)->firstOrFail()]
        );
    }

    public function edit(int $id)
    {
        return view(
            'todo.edit',
            ['todo' => ToDo::where('id', $id)->firstOrFail()]
        );
    }

    public function update(SaveToDo $request, int $id)
    {
        $target = ToDo::where('id', $id)->firstOrFail();
        $target->title = $request->input('title');
        $target->content = $request->input('content');
        $target->priority = $request->input('priority');
        $target->save();

        return Redirect::route('todo.show', ['todo' => $id]);
    }

    public function confirm(int $id)
    {
        return view(
            'todo.confirm_delete',
            ['todo' => ToDo::where('id', $id)->firstOrFail()]
        );
    }

    public function destroy(int $id)
    {
        $target = ToDo::where('id', $id)->firstOrFail();
        $target->delete();

        return Redirect::route('todo.index');
    }
}
