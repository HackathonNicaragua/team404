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

//foro
Route::resource('/foro','ForoController');

Route::get('/inicio', function () {
    return view('inicio');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recursos', 'RecursosController@listar');
Route::get('/filtro/{nivel}', 'RecursosController@filtrar');
Route::resource('recurso', 'RecursosController');
Route::get('/juego_memoria', 'RecursosController@game');
Route::get('/juego_piano', 'RecursosController@game2');

