<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    // _________________Redireccionamiento_______________________
    // vistas generales
    public function index()
    {
        return view('entrenador.inicioen');
    }

    public function editar()
    {
        return view('perfil');
    }

    public function agenda()
    {
        return view('agenda');
    }

    // vistas entrenador y director
    public function estadi(){
        return view('estadisticas');
    }

    // vistas entrenador
    public function bateri(){
        $bateria = DB::Table('tb_test')->get();
        return view('entrenador.bateria', compact('bateria'));
    }

    public function boto(){
        return view('entrenador.boton');
    }

    public function detalles(){
        return view('entrenador.dbateria');
    }

    public function rtest(){
        return view('entrenador.rtest');
    }
    
    public function cara(){
        return view('entrenador.caracterizacion');
    }
    
    // vistas director
    public function ficha(){
        return view('director.import_excel');
    }
    public function usuario(){
        
        $users['users']=User::all();
        return view("director.cargar_usuario",$users);
    }
    public function entre(){
        return view('director.entrenador');
    }


    // vistas deportista
    public function anam1(){
        return view('deportistas.Anamnesis_1');
    }
    public function anam2(){
        return view('deportistas.Anamnesis_2');
    }
    public function anam3(){
        return view('deportistas.Anamnesis_3');
    }
}
