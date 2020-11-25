<?php

namespace App\Http\Controllers;

use App\boton;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use Illuminate\Support\Facades\Validator;
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
        //return redirect('entrenador.bateria')->with('message', 'Guardado Satisfactoriamente !');
    }

    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }

    /*  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $Boton = boton::find($id);

        $imagenes = boton::find($id)->imagenesbicicletas;

        return view('admin/bicicletas.actualizar', compact('imagenes'), ['bicicletas' => $Boton]);
    }

     Proceso de Actualización de un Registro (Update)
    public function update(Request $request, $id)
    {
        $Boton = boton::find($id);
        $Boton->nombre = $request->nombre;
        $Boton->precio = $request->precio;
        $Boton->stock = $request->stock;

        $Boton->save();

        $ci = $request->file('img');

        // Si la variable '$ci' no esta vacia, actualizamos el registro con las nuevas imágenes
        if (!empty($ci)) {

            // Validamos que el nombre y el formato de imagen esten presentes, tu puedes validar mas campos si deseas 
            $this->validate($request, [

                'Nombre' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);

            // Recibimos una o varias imágenes y las actualizamos 
            foreach ($request->file('img') as $image) {
                $imagen = $image->getClientOriginalName();
                $formato = $image->getClientOriginalExtension();
                $image->move(public_path() . '/uploads/', $imagen);

                // Actualizamos el nuevo nombre de la(s) imagen(es) en la tabla 'img_bicicletas'
                FacadesDB::table('tb_test')->insert(
                    [
                        'Nombre' => $imagen,
                        'formato' => $formato,
                        'bicicletas_id' => $Boton->id,
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                    ]
                );
            }
        }

        // Redireccionamos con mensaje  
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/bicicletas');
    }*/


    // Detalles del Producto
    public function detallesproducto($id)
    {
        // Seleccionar un registro por su 'id' 
        $Boton = boton::where('Tes_id', '=', $id)->firstOrFail();

        // Seleccionamos las imágenes por su 'id' 
        $imagenes = boton::find($id)->imagenesbicicletas;

        return view('admin/bicicletas.detallesproducto', compact('bicicletas', 'imagenes'));
    }
}
