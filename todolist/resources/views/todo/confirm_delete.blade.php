@extends('layouts.todo')

@section('title')
    ToDo削除
@endsection

@section('content')

    <h3>ToDo削除</h3>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>優先度</th>
            <th>内容</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->priority }}</td>
            <td>{{ $todo->content }}</td>
        </tr>
        </tbody>
    </table>

<form method="post">
    {{ csrf_field() }}

    <button type="submit">削除</button>
</form>

<a href="{{ route('todo.index') }} ">一覧へ</a>

@endsection