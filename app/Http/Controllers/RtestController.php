<?php

namespace App\Http\Controllers;

use App\boton;
use App\rtest;
use App\Deportistas;
use Illuminate\Http\Request;
Use DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class RtestController extends Controller
{
    public function index()
    {
     return view('entrenador.rtest', ["deportes"=>Deportistas::all()], ["tests"=>boton::all()]);
    }

    public function detallet($Rem_Tes_id)
    {
        // Seleccionar un registro por su 'id' 
        
        $dat = boton::where('Tes_id','=',$Rem_Tes_id)->get();
        return view('entrenador.rtest', compact('dat'));
    }
    
    //RESULTADO TEST

    public function rtestt()
    {
        return view('entrenador.rtest');
    }
    
    public function subir(Request $request){
        $nivel = new rtest($request->input());
        $nivel->saveOrFail();
        return redirect()->route("rtest");
    }
    
}
