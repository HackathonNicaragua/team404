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


Route::get('/inicio', function () {
    return view('inicio');
});

//foro
Route::resource('/foro','ForoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recursos', 'RecursosController@listar');
Route::resource('recurso', 'RecursosController');
