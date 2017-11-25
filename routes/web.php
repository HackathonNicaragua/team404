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
//foro
Route::resource('/foro','ForoController');
=======

Route::get('/inicio', function () {
    return view('inicio');
});

>>>>>>> 8851ab9f97dad579c38f703abe24e1a7f1ad1c02
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
