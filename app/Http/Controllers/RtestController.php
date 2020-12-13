<?php

namespace App\Http\Controllers;

use App\rtest;
use App\Deportistas;
use Illuminate\Http\Request;
Use DB;

class RtestController extends Controller
{
    public function index($Rem_Tes_id)
    {
     $dat = rtest::orderBy('Rem_id', 'DESC')->get();
     return view('entrenador.rtest', compact('dat'), ["deportes"=>Deportistas::all()]);
    }

    public function detallet($Rem_Tes_id)
    {
        // Seleccionar un registro por su 'id' 
        
        $dat = DB::Table('tb_test')->where('Tes_id','=',$Rem_Tes_id)->get();
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

    public function import(Request $rows)
    {

        $dat = [];

        foreach ($rows as $row) 
        {
            $dat[] = array(
                    'Rem_Usu_id'  => $row[0],
                    'Rem_fecha'        => $row[1],
                    'Rem_resultado'       => $row[2],
                );
        }

        if(!empty($dat))
      {
       DB::table('tb_resmensual')->insert($dat);
      }
      return back();
    }
}
