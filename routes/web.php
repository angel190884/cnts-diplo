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

//Rutas god
Route::group(['middleware' => ['role:god']], function () {
    Route::resource('users', 'UserController');             //Administrar usuarios
    Route::resource('roles', 'RoleController');             //Administrar roles
    Route::resource('permissions', 'PermissionController'); //Administrar permisos
});

//Rutas admin
Route::group(['middleware' => ['role:admin']], function () {
    //rutas para administrar los courses
    Route::resource('courses', 'CourseController');


    //rutas para administrar los Authenticated
    Route::get('authenticated','AuthenticatedController@index')->name('authenticated.index');                   //Ruta para listar todos los usuarios authenticated y con registro de solicitud a un diplomado
    Route::get('acceptStudent/{user}','AuthenticatedController@acceptStudent')->name('accept.student');         //ruta para aceptar un usuario como Estudiante
    Route::get('refuseStudent/{user}','AuthenticatedController@refuseStudent')->name('refuse.student');         //ruta para rechazar un usuario como Estudiante

    //rutas para administrar los students
    Route::get('student_index','StudentController@index')->name('student.index');                       //Ruta para listar todos los usuarios authenticated y con registro de solicitud a un diplomado
});


//Rutas authenticated
Route::resource('profile', 'ProfileController',['only' => ['show','edit','update']]);

//Rutas para subir archivos
Route::group(['middleware' => ['auth','permission:editProfile']], function () {
    Route::put('upload_file_img/{id}',          'FilesUploadController@uploadFileImg')->        name('u_img');
    Route::put('upload_file_title/{id}',        'FilesUploadController@uploadFileTitle')->      name('u_title');
    Route::put('upload_file_cedula/{id}',       'FilesUploadController@uploadFileCedula')->     name('u_cedula');
    Route::put('upload_file_carta/{id}',        'FilesUploadController@uploadFileCarta')->      name('u_carta');
    Route::put('upload_file_paid_voucher/{id}', 'FilesUploadController@uploadFilePaidVoucher')->name('u_paid_voucher');
    Route::put('upload_file_voucher/{id}',      'FilesUploadController@uploadFileVoucher')->    name('u_voucher');

});

Route::group(['middleware' => ['auth','role:teacher|student']], function () {
    //rutas para mostrar el contenido de cada topic
    Route::get('content/{slug}',        'TopicController@show')->name('showContent');
    Route::get('activities',        'ActivityController@index')->name('activity.index');
});

Route::group(['middleware' => ['auth','role:student']], function () {
    //rutas para mostrar activities

    Route::put('upload_activity/{id}',      'FilesUploadController@uploadFileActivity')->name('u_activity');
    Route::get('activity/{slug}',        'ActivityController@show')->name('show.activity');
});

Route::group(['middleware' => ['auth','permission:forumOfQuestions']], function () {
    //rutas para mostrar preguntas
    Route::resource('questions', 'QuestionController');
});

Route::group(['middleware' => ['auth','permission:scoreActivity']], function (){
    Route::get('scoresActivity/{slug}',        'ActivityController@scoreActivity')->name('scoreActivity');
});

Route::group(['middleware' => ['auth','permission:changeScoreActivity']], function (){
    Route::post('editScoreActivity/{user}', 'ActivityController@changeScore')->name('changeScoreActivity');
});


    Route::get('scoresQuestion/{slug}',        'QuestionController@scoreQuestion')->name('scoreQuestion');
    Route::post('editScoreQuestion/{user}', 'QuestionController@changeScore')->name('changeScoreQuestion');