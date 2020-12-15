<?php

namespace App\Http\Controllers;

use App\Ficha;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;


//class FichaController extends Controller

class FichaController extends Controller
{
    function index()
    {
     $data = DB::table('tb_ficha')->orderBy('Fic_Cod', 'DESC')->get();
     return view('director.import_excel', compact('data'));
    }


    public function subir(Request $request){
        $nivel = new Ficha($request->input());
        $nivel->saveOrFail();
        return redirect()->route("import_excel")->with(["menssaje" => "ficha creado",
        ]);
    }
    public function import(Request $rows)
    {
        $this->validate($rows, [
            'select_file'  => 'required|mimes:xls,xlsx'
           ]);

        $data = [];

        foreach ($rows as $row) 
        {
            $data[] = array(
                    'Fic_Cod'  => $row[0],
                    'Fic_Nombre'        => $row[1],
                    'Fic_Tipo'       => $row[2],
                    'Fic_Jornada'          => $row[3],
                );
        }

        if(!empty($data))
      {
       DB::table('tb_ficha')->insert($data);
      }
      return back()->with('success', 'Fichas importadas correctamente.');
    }
}

