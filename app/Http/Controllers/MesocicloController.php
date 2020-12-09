<?php

namespace App\Http\Controllers;

use App\Mesociclo;
use Illuminate\Http\Request;

class MesocicloController extends Controller
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
        return view('mesociclo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new Mesociclo($request->input());
        $nivel->saveOrFail();
        return redirect()->route("Mesociclos.index")->with(["menssaje" => "Mesociclo enviado",]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesociclo  $mesociclo
     * @return \Illuminate\Http\Response
     */
    public function show(Mesociclo $mesociclo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesociclo  $mesociclo
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesociclo $mesociclo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesociclo  $mesociclo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesociclo $mesociclo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesociclo  $mesociclo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesociclo $mesociclo)
    {
        //
    }
}
