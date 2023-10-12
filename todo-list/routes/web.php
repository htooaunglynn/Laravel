<?php

use Illuminate\Support\Facades\Route;
use App\Models\ToDoList;
use App\Controller\ToDoListController;

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



Route::get('/', 'App\Http\Controllers\ToDoListController@index');
Route::get('/create', 'App\Http\Controllers\ToDoListController@create');
Route::get('/store', 'App\Http\Controllers\ToDoListController@store');
Route::get('/delete/{id}', 'App\Http\Controllers\ToDoListController@destroy');
Route::get('/edit/{id}', 'App\Http\Controllers\ToDoListController@edit');
Route::get('/update/{id}', 'App\Http\Controllers\ToDoListController@update');

// Route::get('/show', function () {
//     return view('show')->with('todo_lists', ToDoList::all());
// });


// Route::get('/store', [ToDoListController@store]);
