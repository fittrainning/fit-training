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

Route::get('/agenda', 'HomeController@agenda')->name('agenda');

Route::get('/anam1', 'HomeController@anam1')->name('anam1');
Route::get('/anam2', 'HomeController@anam2')->name('anam2');
Route::get('/anam3', 'HomeController@anam3')->name('anam3');
Route::post('/create','AnamnesisController@create')->name('create');
Route::resource('sesion', 'SesionController');

Route::get('/bateria', 'HomeController@bateri')->name('/bateria');

Route::get('rtest', 'RtestController@index')->name('rtest');
Route::post('subirt', 'RtestController@subir')->name('subirt');

Route::get('boton', 'HomeController@boto')->name('boton');
Route::post('boton', 'BotonController@boto')->name('boton');

Route::get('dbateria/{Tes_id}', 'BotonController@detalles')->name('dbateria');

Route::get('/vtest', 'HomeController@vtest')->name('/vtest');
Route::get('vtest/{Rem_id}', 'RController@dtin')->name('vtest');

//Route::get('/ficha', 'HomeController@ficha')->name('ficha');
Route::get('/usuario', 'HomeController@usuario')->name('usuario');
Route::get('/entrenadores', 'HomeController@entre')->name('entrenadores');
Route::resource('entrenador', 'EntrenadorController');
Route::resource('director', 'DirectorController');
//________________________________________________________________________
Route::get('/import_excel', 'FichaController@index')->name('import_excel');
Route::post('/import_excel/import', 'FichaController@import');
//_________________________________________________________________________

Route::resource("Mensajes", "MensajeController")->parameters(["Mensajes"=>"Mensaje"]);
Route::resource("Deportistas", "DeportistaController")->parameters(["Deportistas"=>"Deportista"]);
Route::resource("Planes", "PlanController")->parameters(["Planes"=>"Plan"]);
Route::resource("Mesociclos", "MesocicloController")->parameters(["Mesociclos"=>"Mesociclo"]);
Route::get("Microciclo/{meso}", "MicrocicloController@lista")->name('Microciclo');
//Route::resource("Microciclos", "MicrocicloController")->parameters(["Microciclos"=>"Microciclo"]);

Route::resource("users", "UsuarioController");
Route::resource("Deportes", "DeporteController");
Route::resource("Caracterizacion", "CaracterizacionController");
Route::post('insertar', 'RolesController@insertar')->name('insertar');
Route::post('roll', 'RolesController@roll')->name('roll');
Route::post('subir', 'FichaController@subir')->name('subir');
//_________________________________________________________________________

Route::get('user-list-excel',    'UserController@exportExcel')->name('users.excel');
Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');

//_________________________________________________________________________

Route::get('user-list-excel',    'UserController@ExportExcell')->name('users.excel');


Route::get('/estadisticas', 'HomeController@estadi')->name('estadisticas');
Route::post('/estadisticas/all','HomeController@all')->name('estadisticas/all');

Route::resource('completa', 'FentrenadorController');


Route::post('subirr', 'FentrenadorController@subirr')->name('subirr');

Route::post('Esta/{id}', 'DeporteController@tabla')->name('Esta');