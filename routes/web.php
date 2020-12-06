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

Route::get('/construccion', function () {
    return view('construccion');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editar_perfil', 'HomeController@editar')->name('editar_perfil');

Route::get('/estadisticas', 'HomeController@estadi')->name('estadisticas');
Route::get('/agenda', 'HomeController@agenda')->name('agenda');


Route::get('/anam1', 'HomeController@anam1')->name('anam1');
Route::get('/anam2', 'HomeController@anam2')->name('anam2');
Route::get('/anam3', 'HomeController@anam3')->name('anam3');

Route::get('/caracterizacion', 'CaracterizacionController@cara')->name('caracterizacion');
Route::get('/caracterizacion/index', 'CaracterizacionController@caraini')->name('caracterizacion/index');
Route::get('/caracterizacion/create', 'CaracterizacionController@caracre')->name('caracterizacion/create');
Route::get('/caracterizacion/editar', 'CaracterizacionController@ceditar')->name('caracterizacion/editar');

//
Route::get('/bateria', 'HomeController@bateri')->name('/bateria');
Route::get('rtest', 'HomeController@rtest')->name('rtest');

Route::get('boton', 'HomeController@boto')->name('boton');
Route::post('boton', 'BotonController@boto')->name('boton');

Route::get('dbateria/{Tes_id}', 'BotonController@detalles')->name('dbateria');
//Route::get("Users", "UsuarioController@update")->parameters(["Users"=>"User"]);

Route::get('/ficha', 'HomeController@ficha')->name('ficha');
Route::get('/usuario', 'HomeController@usuario')->name('usuario');
Route::get('/entrenadores', 'HomeController@entre')->name('entrenadores');

//_________________________________________________________________________

Route::resource("Mensajes", "MensajeController")->parameters(["Mensajes"=>"Mensaje"]);
Route::resource("Deportistas", "DeportistaController")->parameters(["Deportistas"=>"Deportista"]);
Route::resource("Deportes", "DeporteController")->parameters(["Deportes"=>"Deporte"]);
Route::resource("Planes", "PlanController")->parameters(["Planes"=>"Plan"]);
Route::resource("Mesociclos", "MesocicloController")->parameters(["Mesociclos"=>"Mesociclo"]);

Route::resource("Users", "UsuarioController")->parameters(["Users"=>"User"]);

//Route::resource("Caracterizacion", "CaracterizacionController")->parameters(["Caracterizaciones"=>"Caracterizacion"]);

//Route::resource("Tests", "TestController")->parameters(["Tests"=>"Test"]);

//_________________________________________________________________________