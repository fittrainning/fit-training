<?php

namespace App\Http\Controllers;

use App\boton;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class BotonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bateri(){
        return view('entrenador.bateriat');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function boto(){
        return view('entrenador.boton');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datos = request()->all();//almacenar todo lo que se envia
        return response()->json ($datos);
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
