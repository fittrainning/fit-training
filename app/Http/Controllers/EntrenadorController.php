<?php

namespace App\Http\Controllers;

use App\Entrenador;
use App\User;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("director.entrenador", ["entrenadores"=>Entrenador::all()], ["users"=>User::all()]);
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
        $entrenador = new Entrenador($request->input());
        $entrenador->saveOrFail();
        return redirect()->route("home")->with(["menssaje" => "Perfil Completado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenador $entrenador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenador $entrenador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenador $entrenador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenador $entrenador)
    {
        //
    }
}