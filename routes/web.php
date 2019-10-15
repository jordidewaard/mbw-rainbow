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

Route::get('/api', 'HoursController@apitest');

Route::get('/', function () {
   	return redirect('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    

	Route::resource('/projects', 'ProjectsController');
	Route::get('/projects/view/{id}', 'ProjectsController@show');

	Route::get('/studentAdding/{id}', 'ProjectsController@studentProjectAdding');
	Route::get('/project/{id}/addstudents', 'ProjectsController@addStudentsToProject');
	Route::get('/project/{project}/addstudent/{student}', 'ProjectsController@addStudent');
	Route::get('/project/{project}/deletestudent/{student}', 'ProjectsController@studentProjectDelete');

	Route::resource('/groups', 'GroupsController');
	Route::get('/groups/view/{id}', 'GroupsController@show');

	Route::resource('/users', 'UsersController');

  Route::get('/studentOverview', 'HoursController@index');
  Route::get('/clients', 'UsersController@client');

	Route::resource('/hours', 'HoursController');
	Route::get('/students/view/{id}/{projectId}/hours', 'HoursController@show');
	Route::get('/hours/requesthours/{project}/addhours', 'HoursController@requestHoursToProject');
	Route::put('/hours/addhours/{userId}/{projectId}', 'HoursController@addHoursToProject')->name('addhours.store');

    Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function()
    {
        Route::get('/teachers', 'AdminController@showteachers');
        Route::get('/teachers/view/{id}', 'AdminController@show');
        Route::resource('/students', 'StudentsController');
        Route::get('/students/view/{id}', 'StudentsController@show');
	    Route::get('/clients', 'UsersController@client');
    });
});



