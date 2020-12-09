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


//importar
    /*function import(Request $request)
    {

     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

     $data = Excel::import($path)->get();

     if($data->count() > 0)
     {
        foreach($data->toArray() as $key => $value)
        {
            foreach($value as $row)
            {
                $insert_data[] = array(
                'Fic_Cod'  => $row['Codigo ficha'],
                'Fic_Nombre'   => $row['Nombre'],
                'Fic_Tipo'   => $row['Tipo'],
                'Fic_Jornada'    => $row['Jornada'],
                );
        }
      }

      if(!empty($insert_data))
      {
       DB::table('tb_ficha')->insert($insert_data);
      }
     }
     return back()->with('success', 'Fichas importadas correctamente.');
    }*/
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

