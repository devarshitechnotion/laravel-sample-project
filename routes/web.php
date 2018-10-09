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

/* Route::get('/', function () {
    return view('hello');
}); */

Route::get('/', 'Hello@index');

Route::get('/admin', 'Admin@index');

Route::get('/tasks', 'TasksController@index');

//Route::get('/tasks', 'Tasks@remainingTask');


Route::get('/tasks/{id}', 'TasksController@taskDetail');

