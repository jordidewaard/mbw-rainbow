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
Route::get('/welcome', 'UsersController@welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('changepassword', 'ChangePasswordController@index');
    Route::post('changepassword', 'ChangePasswordController@store')->name('change.password');
    Route::resource('/form', 'FormController');
    Route::resource('/projects', 'ProjectsController');
    Route::get('/projects/view/{id}', 'ProjectsController@show');
    Route::get('/projects/delete/{id}', 'ProjectsController@delete');
    Route::get('/project/{id}/addstudents', 'ProjectsController@addStudentsToProject');
    Route::get('/project/{project}/addstudent/{student}', 'ProjectsController@addStudent');
    Route::get('/project/{project}/deletestudent/{student}', 'ProjectsController@studentProjectDelete');
    Route::get('/studentAdding/{id}', 'ProjectsController@studentProjectAdding');
    

    Route::get('/overview/{id}', 'StudentsController@showOverview');
    Route::get('/overview/{projectUserId}/hours', 'HoursController@show');

    Route::resource('/groups', 'GroupsController');
    Route::get('/groups/view/{id}', 'GroupsController@show');
    Route::resource('/users', 'UsersController');

    Route::get('/studentOverview', 'HoursController@index');

    Route::resource('/hours', 'HoursController');
    Route::put('/hours/requesthours/{userId}/{projectUserId}', 'HoursController@requestHoursToProject')->name('requesthours.store');
    Route::get('/hours/edit/{id}', 'HoursController@edit');

    Route::group(['middleware' => 'App\Http\Middleware\IsClient'], function()
    {
        Route::get('/clients/view/{id}', 'UsersController@showClient');
        Route::post('/hours/acceptHours/{hourId}/{hours}', 'HoursController@acceptHoursRequest');
        Route::post('/hours/rejectHours/{hourId}/{hours}', 'HoursController@rejectHoursRequest');
    });

    Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function()
    {
        Route::get('/teachers', 'AdminController@showteachers');
        Route::get('/teachers/view/{id}', 'AdminController@show');
        Route::resource('/students', 'StudentsController');
        Route::get('/students/view/{projectUserId}/hours', 'HoursController@show');
        Route::get('/students/view/{id}', 'StudentsController@show');
        Route::get('/clients', 'UsersController@client');
        Route::get('/clients/view/{id}', 'UsersController@showClient');

        Route::get('/add', 'Auth\RegisterController@showRegistrationForm')->name('add');
        Route::post('/add', 'Auth\RegisterController@register');


    });
});


