<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|


Route::any('/', function () {
    return view('logg');
});*/
Route::get('/', ['uses' => 'MessageController@index', 'as' => 'homepage']);
Route::post('/', ['uses' => 'MessageController@insert', 'as' => 'add_new_message']);
Route::get('message/{id}/edit', ['uses' => 'MessageController@edit', 'as' => 'message.edit'])->where(['id' => '[0-9]+']);
Route::get('message/{id}/delete', ['uses' => 'MessageController@delete', 'as' => 'message.delete'])->where(['id' => '[0-9]+']);
Route::get('tasks', ['uses' => 'TaskController@index']);
Route::post('task', ['uses' => 'TaskController@store']);
Route::delete('task/{task}', ['uses' => 'TaskController@delete'])->where(['task'=>'[0-9]+']);
Auth::routes();
