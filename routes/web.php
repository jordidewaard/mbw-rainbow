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
    return view('pages.welcome');
});

Route::resource('/projects', 'ProjectsController');
Route::get('/projects/view/{id}', 'ProjectsController@show');

Route::resource('/groups', 'GroupsController');
Route::get('/groups/view/{id}', 'GroupsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


