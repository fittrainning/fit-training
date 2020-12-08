<?php

namespace App\Http\Controllers;

use App\Caracterizacion;
use Illuminate\Http\Request;

class CaracterizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('entrenador.cinicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Caracterizacion  $caracterizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Caracterizacion $caracterizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caracterizacion  $caracterizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracterizacion $caracterizacion)
    {
        //return view('entrenador.ceditar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caracterizacion  $caracterizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracterizacion $caracterizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caracterizacion  $caracterizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracterizacion $caracterizacion)
    {
        //
    }
}
