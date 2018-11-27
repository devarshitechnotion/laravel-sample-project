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

Route::get('/summary', 'SummaryController@index');

Route::get('/summary/create', 'SummaryController@create');

Route::post('/summary/store', 'SummaryController@store');

Route::get('/summary/edit/{id}', 'SummaryController@edit');

Route::get('/summary/{id}', 'SummaryController@show');

Route::post('/summary/edit/{id}', 'SummaryController@update');


    











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
