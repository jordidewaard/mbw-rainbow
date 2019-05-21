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
Auth::routes(['verify' => true]);


Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/projects', 'ProjectsController');
Route::get('/projects/view/{id}', 'ProjectsController@show');

Route::resource('/groups', 'GroupsController');
Route::get('/groups/view/{id}', 'GroupsController@show');

Route::get('/teachers', 'HomeController@teacher');
Route::get('/students', 'HomeController@student');
Route::get('/clients', 'HomeController@client');




