<?php

namespace App\Http\Controllers;

use App\Fentrenador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FentrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fentrenador::orderBy('Fed_cod', 'DESC')->get();
        return view('completarfichas', compact('data'));
    }
    public function create(Request $request){
        $nivel = new Fentrenador($request->input());
        $nivel->saveOrFail();
        return redirect()->route("completa.index")->with(["menssaje" => "ficha creado",]);
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
                );
        }

        if(!empty($dat))
      {
       DB::table('tb_fed')->insert($dat);
      }
      return back();
    }

}