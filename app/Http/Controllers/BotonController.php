<?php
namespace App\Http\Controllers;

use DB;
use App\boton;
use App\rtest;
use App\Deportistas;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Input;
use Storage;
use Illuminate\Support\Str;
use File;
//use GuzzleHttp\Psr7\Request;
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
        //dd($Boton);

        $bateria = DB::Table('tb_test')->get();
        return view('entrenador.bateria', compact('bateria'));
        //return redirect(),('status','$Boton->Tes_nombre');
    }

    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }


    // Detalles del Producto
    public function detalles($Tes_id)
    {
        // Seleccionar un registro por su 'id' 
        
        $bateri = DB::Table('tb_test')->where('Tes_id','=', $Tes_id)->get();
        return view('entrenador.dbateria', compact('bateri'));
    }

    //RESULTADO TEST
    public function rtest(Request $request)
    {
        //dd($request->all());
        //lo campos de request deben ser lo mismos que en el formulario 
        $rtest = new rtest;
        //$rtest->Rem_Tes_id = $request->idtest;
        $rtest->Rem_Usu_id = $request->Documento;
        $rtest->Rem_fecha = $request->Fecha;
        $rtest->Rem_resultado = $request->Calificacion;

        $rtest->save();
        dd($rtest);

        $rtes = DB::Table('tb_resmensual')->get();
        return view('entrenador.vtest', compact('rtes', ["deportistas"=>Deportistas::all()]));
        //return redirect(),('status','$Boton->Tes_nombre');
    }


    // Detalles del Producto
    public function dtest($Rem_id)
    {
        // Seleccionar un registro por su 'id' 
        
        /*$rest = DB::Table('tb_resmensual')->where('Rem_id','=', $Rem_id)->get();
        return view('entrenador.vtest', compact('rest'));*/
    }
}
