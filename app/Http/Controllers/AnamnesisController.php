<?php

namespace App\Http\Controllers;

use App\Anamnesis;
use Illuminate\Http\Request;

class AnamnesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("deportistas.Anamnesis_3", ["Ananmnesis"=>Anamnesis::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $anamnesisdata = request()->except('_token');
        Anamnesis::insert($anamnesisdata);


        return 'datos guardados';
    }

    public function subirlogros(Request $request)
    {
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        $request->file('Ana_Logrosdeportivos')->store('public');
        dd("subido y guardado");
    }
    public function subirhismedico(Request $request)
    {
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        $request->file('exampleFormControlFile1')->store('public');
        dd("subido y guardado");
    }
    public function subirhisalimen(Request $request)
    {
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        $request->file('exampleFormControlFile1')->store('public');
        dd("subido y guardado");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function show(Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anamnesis $anamnesis)
    {
        //
    }
}
