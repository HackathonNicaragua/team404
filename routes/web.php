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

Route::get('/inicio', function () {
    return view('inicio');
});

=======
//foro
Route::resource('/foro','ForoController');
>>>>>>> ae6659c8cdffe274874d944daa4f4e0e30b44c06
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recursos', 'RecursosController@listar');
