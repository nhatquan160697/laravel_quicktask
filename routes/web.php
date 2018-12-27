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

Route::get('/', [
    'uses' => 'TaskController@index',
    'as' => 'tasks'
]);
Route::post('/', [
    'uses' => 'TaskController@createTask',
    'as' => 'tasks'
]);

Route::delete('/del/{id}', [
    'uses' => 'TaskController@deleteTask',
    'as' => 'deleteTasks'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
