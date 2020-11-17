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

Route::get('/anamnesis1', function () {
    return view('deportistas.Anamnesis_1');
});

Route::get('/anamnesis2', function () {
    return view('deportistas.Anamnesis_2');
});

Route::get('/anamnesis3', function () {
    return view('deportistas.Anamnesis_3');
});

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

Route::get('/anamnesis_1', 'HomeController@anam1')->name('anamnesis_1');

Route::get('/caracterizacion', 'HomeController@cara')->name('caracterizacion');

Route::get('/ficha', 'HomeController@ficha')->name('ficha');
Route::get('/usuario', 'HomeController@usuario')->name('usuario');