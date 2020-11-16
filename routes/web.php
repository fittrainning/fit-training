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

Route::get('/cargar_ficha', function () {
    return view('director.cargar_ficha');
});

Route::get('/cargar_usuario', function () {
    return view('director.cargar_usuario');
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
Route::get('/enviar', 'HomeController@mensajeriaa')->name('enviar');


Route::get('/anamnesis_1', 'HomeController@anam1')->name('anamnesis_1');
Route::get('/caracterizacion', 'HomeController@cara')->name('caracterizacion');
