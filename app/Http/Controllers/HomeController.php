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

    public function dosifi(){
        return view('entrenador.');
    }
}
