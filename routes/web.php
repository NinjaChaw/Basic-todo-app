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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



//Todo app routs
Route::get('read', ['as'=>'todos', 'uses'=>'TodosController@index']);

Route::post('create', 'TodosController@store');

Route::get('delete/{id}', ['as'=>'todo.delete', 'uses'=>'TodosController@delete']);

Route::get('update/{id}', ['as'=>'todo.update', 'uses'=>'TodosController@update']);

Route::post('todo/save/{id}', ['as'=>'todo.save', 'uses'=>'TodosController@save']);

Route::get('todo/completed/{id}', ['as'=>'todo.completed', 'uses'=>'TodosController@completed']);