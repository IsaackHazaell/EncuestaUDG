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
    return view('welcome');
});

Route::get('/encuesta', function () {
    return view('encuesta');
});

Auth::routes();

Route::get('/home', function(){
  return view('admin.dashboard');
})->middleware('auth');

Route::get('/users/profile', function(){
  return view('users.profile');
});

//Users rout's
Route::resource('users','UsersController')->middleware('auth');
Route::get('showTableU','UsersController@showTableU')->name('users.showTableU')->middleware('auth');

//Teachers rout's
Route::resource('teacher','TeacherController')->middleware('auth');
Route::get('showTableT','TeacherController@showTableT')->name('teachers.showTableT')->middleware('auth');

//Departments rout's
Route::resource('department','DepartmentController')->middleware('auth');
Route::get('showTableD','DepartmentController@showTableD')->name('departments.showTableD')->middleware('auth');

//HeadDepartments rout's
Route::resource('hdepartment','HeadDepartmentController')->middleware('auth');
Route::get('showTableHD','HeadDepartmentController@showTableHD')->name('hdepartments.showTableHD')->middleware('auth');

//Poll rout's
Route::resource('poll','PollController')->middleware('auth');
Route::get('poll/public/{poll}','PollController@public')->name('poll.public')->middleware('auth');
Route::get('showTableP','PollController@showTableP')->name('poll.showTableP')->middleware('auth');

//Groups rout's
Route::resource('group','GroupController')->middleware('auth');
Route::get('showTableG','GroupController@showTableG')->name('groups.showTableG')->middleware('auth');

//Constancy rout's
Route::resource('constancy','ConstancyController')->middleware('auth');
Route::get('showTableC','ConstancyController@showTableC')->name('constancys.showTableC')->middleware('auth');

