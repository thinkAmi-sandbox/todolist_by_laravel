@extends('layouts.todo')

@section('title')
    ToDo一覧
@endsection

@section('content')

<h3>ToDo一覧</h3>
<a href="{{ route('todo.create') }}">作成</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>優先度</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>

    @foreach($todos as $todo)
    <tr>
        <td><a href="{{ route('todo.show', ['id' => $todo->id]) }}">{{ $todo->id }}</a></td>
        <td><a href="{{ route('todo.show', ['id' => $todo->id]) }}">{{ $todo->title }}</a></td>
        <td><a href="{{ route('todo.show', ['id' => $todo->id]) }}">{{ $todo->priority }}</a></td>
        <td>
            <a href="{{ route('todo.edit', ['id' => $todo->id]) }}">変更</a>
            <a href="{{ route('todo.confirm', ['id' => $todo->id]) }}">削除</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

@endsection