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

Route::get('/construccion', function () {
    return view('construccion');
});
//_________________________________________________________________________

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editar_perfil', 'HomeController@editar')->name('editar_perfil');
Route::get('/mensajeria', 'HomeController@mensajeria')->name('mensajeria');
Route::get('/responder', 'HomeController@mensajeriaa')->name('responder');
Route::get('/enviar', 'HomeController@mensaje')->name('enviar');
Route::get('/estadisticas', 'HomeController@estadi')->name('estadisticas');
Route::get('/plan', 'HomeController@plan')->name('plan');

Route::get('/anam1', 'HomeController@anam1')->name('anam1');
Route::get('/anam2', 'HomeController@anam2')->name('anam2');
Route::get('/anam3', 'HomeController@anam3')->name('anam3');

Route::get('/caracterizacion', 'HomeController@cara')->name('caracterizacion');
Route::get('/caracterizacion/deporte', 'HomeController@caraini')->name('caracterizacion/deporte');
Route::get('/bateria', 'HomeController@bateri')->name('bateria');
Route::get('/boton', 'HomeController@boto')->name('boton');

Route::get('/ficha', 'HomeController@ficha')->name('ficha');
Route::get('/usuario', 'HomeController@usuario')->name('usuario');
Route::get('/entrenadores', 'HomeController@entre')->name('entrenadores');
