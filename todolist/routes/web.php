<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('todo')->group(function(){
    // 一覧
    Route::get('/', 'ToDoController@index')->name('todo.index');

    // 詳細
    Route::get('/{id}', 'ToDoController@show')
        ->where('id', '[0-9]+')
        ->name('todo.show');

    // 新規作成
    Route::get('/create', 'ToDoController@create')
        ->name('todo.create');
    Route::post('/create', 'ToDoController@store')
        ->name('todo.store');

    // 編集
    Route::get('/{id}/edit', 'ToDoController@edit')
        ->where('id', '[0-9]+')
        ->name('todo.edit');
    Route::post('/{id}/update', 'ToDoController@update')
        ->where('id', '[0-9]+')
        ->name('todo.update');

    // 削除
    Route::get('/{id}/delete', 'ToDoController@confirm')
        ->where('id', '[0-9]+')
        ->name('todo.confirm');
    Route::post('/{id}/delete', 'ToDoController@destroy')
        ->where('id', '[0-9]+')
        ->name('todo.destroy');
});



