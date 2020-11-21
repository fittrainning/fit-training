<?php

namespace App\Http\Controllers;

use App\boton;
use Illuminate\Http\Request;

class BotonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bot = boton::all();
        return view('bateriat', compact('boton'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        return boton::create([
            'Tes_id' => $data['Tes_id'],
            'Tes_nombre' => $data['Tes_nombre'],
            'Tes_capacidad' => $data['Tes_capacidad'],
            'Tes_objetivo' => $data['Tes_objetivo'],
            'Tes_desarrollo' => $data['Tes_desarrollo'],
            'Tes_material' => $data['Tes_material'],
            'Tes_evaluacion' => $data['Tes_evaluacion'],
            'Tes_imagen' => $data['Tes_imagen'],
            'Tes_icono' => $data['Tes_icono'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'Tes_id' => ['required', 'String', 'max:15'],
            'Tes_nombre' => ['required', 'string', 'max:255'],
            'Tes_capacidad' => ['required', 'string', 'max:255'],
            'Tes_objetivo' => ['required', 'string', 'max:255'],
            'Tes_desarrollo' => ['required', 'string', 'max:255'],
            'Tes_material' => ['string', 'max:10'],
            'Tes_evaluacion' => ['required', 'string', 'min:8', 'confirmed'],
            'Tes_imagen' => ['string', 'max:9'],
            'Tes_icono' => ['string', 'max:255'],
        ]);
        $bot = boton::create($storeData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\boton  $boton
     * @return \Illuminate\Http\Response
     */
    public function show(boton $boton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\boton  $boton
     * @return \Illuminate\Http\Response
     */
    public function edit(boton $boton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\boton  $boton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, boton $boton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\boton  $boton
     * @return \Illuminate\Http\Response
     */
    public function destroy(boton $boton)
    {
        //
    }
}
