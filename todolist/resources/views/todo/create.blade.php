@extends('layouts.todo')

@section('title')
    ToDo
@endsection


@section('content')
<h3>ToDo</h3>

{!! Form::open(['route' => 'todo.store']) !!}
    {!! Form::label('title', 'タイトル') !!}
    {!! Form::text('title') !!}
    <p>{{ $errors->first('title') }}</p>

    {!! Form::label('content', '内容') !!}
    {!! Form::textarea('content') !!}
    <p>{{ $errors->first('content') }}</p>

    {!! Form::label('priority', '優先度') !!}
    {!! Form::text('priority') !!}
    <p>{{ $errors->first('priority') }}</p>

    {!! Form::submit('保存') !!}

{!! Form::close() !!}

<a href="{{ route('todo.index') }}">一覧へ</a>

@endsection