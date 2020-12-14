<?php

namespace App\Http\Controllers;

use App\rtest;
use DB;
use Illuminate\Http\Request;

class RController extends Controller
{
    public function dtin($Rem_id)
    {
        // Seleccionar un registro por su 'id' 
        
        $dat = rtest::where('Rem_id','=',$Rem_id)->get();
        return view('entrenador.vtest', compact('dat'));
    }
}
