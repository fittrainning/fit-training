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
        
        $dat = rtest::where('Rem_Tes_id','=',$Rem_id)->get();
        return view('entrenador.vtest', compact('dat'));
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
