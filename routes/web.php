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

Route::get('/', function ()
{
    return view('welcome');
});
Route::resource('projects', 'ProjectsController');

//Route::get('/projects','ProjectsController@index');
//Route::post  ('/projects','ProjectsController@store');
//Route::get('/projects/{project}','ProjectsController@show');
//Route::post('/projects/create','ProjectsController@create');
//Route::get('/projects/{project}/edit','ProjectsController@edit');
//Route::patch('/projects/{project}','ProjectsController@update');
//Route::delete('/projects/{project}','ProjectsController@destroy');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update')->middleware('auth');
Route::delete('/tasks/{task}', 'ProjectTasksController@destroy');

Route::post('/completed-tasks/{task}','CompletedTaskController@store');
Route::delete('/completed-tasks/{task}','CompletedTaskController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




