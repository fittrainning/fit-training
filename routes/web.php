<?php

use Illuminate\Support\Facades\Route;

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

//_________________________________________________________________________
Route::get('/bateria', function () {
    return view('entrenador.bateriat');
});

Route::get('/boton', function () {
    return view('entrenador.boton');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/construccion', function () {
    return view('construccion');
});
//_________________________________________________________________________

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
