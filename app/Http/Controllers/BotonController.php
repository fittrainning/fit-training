<?php

namespace App\Http\Controllers;

use App\boton;
use Illuminate\Http\Request;

use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Schema;

class BotonController extends Controller
{
    // Leer Registros (Read) 

    public function index()
    {
        $Boton = boton::select('Tes_id', 'Tes_nombre', 'Tes_capacidad', 'Tes_objetivo', 'Tes_desarrollo', 'Tes_material', 'Tes_evaluacion', 'Tes_imagen', 'url');
        return view('entrenador.bateria', compact('bateria'));
        //return view('entrenador.bateria');
    }

    public function create()
    {
        $Boton = boton::all();
        return view('entrenador.boton', compact('boton'));
        //return view('entrenador.boton'); 
    }

    /*public function store(Request $request) //solicitud realizaada request
        {
            $Boton=request()->all(); //alamcenar todo lo que se envia de request
        return response()->json($Boton);
        }*/

    // Crear un Registro (Create) 
    public function crear()
    {
        $Boton = boton::all();
        return view('entrenador.boton', compact('boton'));
    }

    // Proceso de Creación de un Registro 
    public function store(Request $request)
    {
        $Boton = new boton;
        $Boton->Tes_nombre = $request->Tes_nombre;
        $Boton->Tes_capacidad = $request->Tes_capacidad;
        $Boton->Tes_objetivo = $request->Tes_objetivo;
        $Boton->Tes_desarrollo = $request->Tes_desarrollo;
        $Boton->Tes_material = $request->Tes_material;
        $Boton->Tes_evaluacion = $request->Tes_evaluacion;
        $Boton->Tes_imagen = $request->Tes_imagen;
        $Boton->url = Str::slug($request->Tes_nombre, '-');  // Acá generamos la URL amigable a partir del nombre y la guardamos en la Base de Datos

        $Boton->save();

        $ci = $request->file('foto');

        // Validamos campos
        $this->validate($request, [

            'Nombre' => 'required',
            'Capacidad' => 'required',
            'Objetivo' => 'required',
            'Desarrollo' => 'required',
            'Material' => 'required',
            'Evaluacion' => 'required',
            'Foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        // Recibimos una o varias imágenes y las guardamos en la carpeta 'uploads'
        foreach ($request->file('Foto') as $image) {
            $imagen = $image->getClientOriginalName();
            $formato = $image->getClientOriginalExtension();
            $image->move(public_path() . '/uploads/', $imagen);

            // Guardamos el nombre de la imagen en la tabla 'img_bicicletas'
            FacadesDB::table('tb_test')->insert(
                [
                    'formato' => $formato,
                    'Tes_id' => $Boton->Tes_id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]
            );
        }

        // Redireccionamos con mensaje 
        return redirect('entrenador.bateria')->with('message', 'Guardado Satisfactoriamente !');
    }

    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }
}
