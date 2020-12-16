<?php

namespace App\Http\Controllers;

use App\Fentrenador;
use Illuminate\Http\Request;
use App\Fentreador;
use DB;

class FentrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function Completar(Request $request){
        $nivel = new Fentrenador($request->input());
        $nivel->saveOrFail();
        return redirect()->route("completarfichas")->with(["menssaje" => "ficha creado",
    }
    public function tabla($Fed_cod){
        
        $dat = Fentrenador::where('Fed_cod','=',$Fed_cod)->get();
        return view('completarfichas', compact('dat'));
        
    }    
   
    public function import(Request $rows)
    {

        $dat = [];

        foreach ($rows as $row) 
        {
            $dat[] = array(
                    'Fed_id_Dir'       => $row[0],
                    'Fed_cod'  => $row[1],
                    'Fed_nombre'        => $row[2],
                    'Fed_tipo'       => $row[3],
                    'Fed_jornada'       => $row[4],
                    'Fed_id_Ent'       => $row[5],
                );
        }

        if(!empty($dat))
      {
       DB::table('tb_fed')->insert($dat);
      }
      return back();
    }

}