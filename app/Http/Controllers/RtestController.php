<?php

namespace App\Http\Controllers;

use App\rtest;
use Illuminate\Http\Request;
Use DB;

class RtestController extends Controller
{
    public function rtest($Tes_id)
    {
        // Seleccionar un registro por su 'id' 
        
        $bate = DB::Table('tb_resmensual')->where('Tes_id','=', $Tes_id)->get();
 
        
        return view('entrenador.rtest');
    }
}
