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
    return view('inicio');
});


//foro
Route::resource('/foro','ForoController');
Route::get('/listar-foro','ForoController@listarPublicaciones');

Route::Resource('/comentarios','ComentarioController');
Route::get('/listar-comentarios','ComentarioController@listarComentarios');


Route::get('/inicio', function () {
    return view('inicio');
});



Route::get('/cursos', 'CursosController@showAll');
Route::get('/cursos/area/{$idArea}', 'CursosController@showByArea');

Auth::routes();

Route::Resource('/registroDoc', 'MaestroController');
Route::get('/perfilDoc/{id}', 'MaestroController@perfil');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recursos', 'RecursosController@listar');
Route::resource('recurso', 'RecursosController');
