<?php

namespace App\Http\Controllers;

use App\boton;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use Illuminate\Support\Facades\Validator;
use Input;
use Storage;
use Illuminate\Support\Str;
use File;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Schema;

class BotonController extends Controller
{
    // Leer Registros (Read) 
    public function boto(Request $request)
    {
        //dd($request->all());
        //lo campos de request debeb ser lo mismos que en el formulario los name si am
        $Boton = new boton;
        $Boton->Tes_nombre = $request->Nombre;
        $Boton->Tes_capacidad = $request->Capacidad;
        $Boton->Tes_objetivo = $request->Objetivo;
        $Boton->Tes_desarrollo = $request->Desarrollo;
        $Boton->Tes_material = $request->Material;
        $Boton->Tes_evaluacion = $request->Evaluacion;

        // con esto miramos si existe un archivo en el campo Foto
        if($request->hasFile('Foto')){
            //con esto obtenemos el nombre de la foto
            $imagen=$request->file('Foto')->getClientOriginalName();
            //con esto obtenemos el formato de la foto
            $formato=$request->file('Foto')->getClientOriginalExtension();
            // con esto se copia la imagen en la carpeta 
            $request->file('Foto')->move(public_path().'/uploads/',$imagen);
            $Boton->Tes_imagen = $imagen;
        }
        $Boton->save();
        dd($Boton);

        //return view('entrenador.bateria',compact('Boton'));
        //return redirect(),('status','$Boton->Tes_nombre');
    }

    public function index()
    {
        $Boton = boton::select('Tes_id', 'Tes_nombre', 'Tes_capacidad', 'Tes_objetivo', 'Tes_desarrollo', 'Tes_material', 'Tes_evaluacion', 'Tes_imagen', 'url');
        return view('entrenador.boton', compact('boton'));
        //return view('entrenador.bateria');
    }


    // Crear un Registro (Create) 
    public function crear()
    {
        $Boton = boton::all();
        return view('entrenador.boton', compact('boton'));
    }

    // Proceso de Creación de un Registro 
    public function store(ItemCreateRequest $request)
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

        $ci = $request->file('Foto');

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

            // Guardamos el nombre de la imagen en la tabla 
            FacadesDB::table('tb_test')->insert(
                [
                    'formato' => $formato,
                    'nombre' => $Boton->nombre,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]
            );
        }
    }

    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }


    // Detalles del Producto
    public function detallesproducto($id)
    {
        // Seleccionar un registro por su 'id' 
        $Boton = boton::where('Tes_id', '=', $id)->firstOrFail();

        // Seleccionamos las imágenes por su 'id' 
        $imagenes = boton::find($id)->imagenesbicicletas;

        return view('admin/boton.dbateria', compact('boton', 'imagenes'));
    }
}
