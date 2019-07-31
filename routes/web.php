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
});

//Users rout's
Route::resource('users','UsersController');
Route::get('showTableU','UsersController@showTableU')->name('users.showTableU');

//Teachers rout's
Route::resource('teacher','TeacherController');
Route::get('showTableT','TeacherController@showTableT')->name('teacher.showTableT');
