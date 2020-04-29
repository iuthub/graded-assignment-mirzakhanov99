<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TaskController@index');

Route::post('/create', 'TaskController@create');
Route::get('/blog/edit/{id}', 'TaskController@update');
Route::post('/task/edit/{id}', 'TaskController@edit');
Route::get('/task/delete/{id}', 'TaskController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
