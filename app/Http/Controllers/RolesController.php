<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return view('director.cargar_usuario');
    }
    public function insertar(request $request){
        $nivel = new User($request->input());
        $nivel->saveOrFail();
        return redirect()->route("usuario")->with(["menssaje" => "usuario creado",
        ]);
    }

    public function roll($user){
        $enviar= User::findOrFail($user->Usu_id);
        return view('director.roll',compact("enviar"));
    }
}
