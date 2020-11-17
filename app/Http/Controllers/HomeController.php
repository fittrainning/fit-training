<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function mensajeria()
    {
        return view('mensajeria1');
    }
    public function mensajeriaa()
    {
        return view('mensajeria2');
    }
    public function mensaje()
    {
        return view('enviarm');
    }

    // vistas entrenador y director
    public function estadi(){
        return view('estadisticas');
    }

    // vistas entrenador
    public function cara(){
        return view('entrenador.caracterizacion');
    }

    // vistas director
    public function ficha(){
        return view('director.cargar_ficha');
    }
    public function usuario(){
        return view('director.cargar_usuario');
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
