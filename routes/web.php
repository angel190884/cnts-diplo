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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['role:god']], function () {

    Route::resource('users', 'UserController');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');
});

Route::resource('profile', 'ProfileController');
Route::put('upload_file_img/{id}','ProfileController@uploadFileImg')->name('u_img');
Route::put('upload_file_title/{id}','ProfileController@uploadFileTitle')->name('u_title');
Route::put('upload_file_cedula/{id}','ProfileController@uploadFileCedula')->name('u_cedula');
Route::put('upload_file_carta/{id}','ProfileController@uploadFileCarta')->name('u_carta');
Route::get('user_data','ProfileController@getData');
