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

Route::group(['middleware' => ['auth']], function () {

    Route::resource('/form', 'FormController');
    Route::resource('/projects', 'ProjectsController');
    Route::get('/projects/view/{id}', 'ProjectsController@show');
    Route::get('/project/{id}/addstudents', 'ProjectsController@addStudentsToProject');
    Route::get('/project/{project}/addstudent/{student}', 'ProjectsController@addStudent');
    Route::get('/project/{project}/deletestudent/{student}', 'ProjectsController@studentProjectDelete');
    Route::get('/studentAdding/{id}', 'ProjectsController@studentProjectAdding');
    
  	Route::get('/overview/{id}', 'StudentsController@show');
    Route::resource('/groups', 'GroupsController');
    Route::get('/groups/view/{id}', 'GroupsController@show');

    Route::resource('/users', 'UsersController');

    Route::get('/clients', 'UsersController@client');

    Route::resource('/hours', 'HoursController');
    Route::get('/hours/requesthours/{project}/addhours', 'HoursController@requestHoursToProject');
    Route::post('/hours/delete/{id}', 'HoursController@destroy');
    Route::get('/hours/edit/{id}', 'HoursController@edit');
    Route::get('/hours/update/{id}', 'HoursController@update');
	
    Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function()
    {
        Route::get('/teachers', 'AdminController@showteachers');
        Route::get('/teachers/view/{id}', 'AdminController@show');
        Route::resource('/students', 'StudentsController');
        Route::get('/students/view/{projectUserId}/hours', 'HoursController@show');
        Route::get('/students/view/{id}', 'StudentsController@show');
		    Route::put('/hours/addhours/{userId}/{projectUserId}', 'HoursController@addHoursToProject')->name('addhours.store');
	      Route::get('/clients', 'UsersController@client');

    });
});



