<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roles extends Controller
{
    public function index(){
        return view('director.cargar_usuario');
    }
    public function insertar(){
        //
    }
}
