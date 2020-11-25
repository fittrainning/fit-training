<?php

namespace App\Http\Controllers;

use App\boton;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        //lo campos de request deben ser lo mismos que en el formulario 
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
