<?php

namespace App\Http\Controllers;
use App\boton;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class BotonController extends Controller
{
    //
    public function index()
    {
     $Boton = boton::select('Tes_id', 'Tes_nombre', 'Tes_capacidad', 'Tes_icono', 'url');
 
        //
 
        // return view('entrenador.bateriat', compact('bateriat')); //No estoy segura
    }

    // Crear un Registro (Create) 
    public function crear()
    {
        $Boton = boton::all();
        // return view('entrenador.boton', compact('boton')); No estoy segura
    }

        // Proceso de Creación de un Registro 
        public function store(Request $request)
        {
            $Boton= new boton;
            $Boton->Tes_nombre = $request->Tes_nombre;
            $Boton->Tes_capacidad = $request->Tes_capacidad;
            $Boton->Tes_icono = $request->Tes_icono;
            $Boton->url = Str::slug($request->Tes_nombre, '-');  // Acá generamos la URL amigable a partir del nombre y la guardamos en la Base de Datos
     
            $Boton->save();
     
            $ci = $request->file('foto');
     
            // Validamos campos
            $this->validate($request, [
     
                'nombre' => 'required',
                'capacidad' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     
            ]);        
     
            // Recibimos una o varias imágenes y las guardamos en la carpeta 'uploads'
            foreach($request->file('foto') as $image)
                {
                    $imagen = $image->getClientOriginalName();
                    $formato = $image->getClientOriginalExtension();
                    $image->move(public_path().'/uploads/', $imagen);
     
                    // Guardamos el nombre de la imagen en la tabla 'img_bicicletas'
                    /*DB::table('tb_test')->insert(
         [
          'formato' => $formato,
          'Tes_id' => $Boton->id,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")
         ]
     );
     */
     
                }         
     
            // Redireccionamos con mensaje 
            return redirect('entrenador.bateriat')->with('message','Guardado Satisfactoriamente !');
        }
     
        // Leer un Registro específico (Leer)
        public function show($id)
        {
            //
        }

}
