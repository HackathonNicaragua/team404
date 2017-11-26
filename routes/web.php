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
>>>>>>> 79d1aeb63ddc50fa61b0480ed306898ffcc66cc9

Route::get('/inicio', function () {
    return view('inicio');
});

<<<<<<< HEAD
//foro
Route::resource('/foro','ForoController');
=======
>>>>>>> 79d1aeb63ddc50fa61b0480ed306898ffcc66cc9
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recursos', 'RecursosController@listar');
Route::resource('recurso', 'RecursosController');
