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

<<<<<<< HEAD
=======
//foro
Route::resource('/foro','ForoController');
Route::get('/listar-foro','ForoController@listarPublicaciones');

Route::Resource('/comentarios','ComentarioController');
Route::get('/listar-comentarios','ComentarioController@listarComentarios');
>>>>>>> 415269301cff8c88934170181147afc8486677ed

Route::get('/inicio', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recursos', 'RecursosController@listar');
Route::resource('recurso', 'RecursosController');
