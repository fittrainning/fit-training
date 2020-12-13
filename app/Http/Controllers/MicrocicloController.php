<?php

namespace App\Http\Controllers;

use App\Microciclo;
use App\Mesociclo;
use App\Plan;
use App\User;
use Illuminate\Http\Request;

class MicrocicloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('microciclo', ["micro"=>Microciclo::all()],["user"=>User::all()]);
    }

    public function lista($meso)
    {
        $micro= Microciclo::where('Mic_Mes_Id_Gen', '=', $meso)->get();
        return view('microciclo', compact('micro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $micro= Microciclo::where('Mic_Mes_Id_Gen', '=', $id)->get();
        return view('microciclo1',[compact('micro')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new Microciclo($request->input());
        $nivel->saveOrFail();
        return redirect()->route("Microciclos.index")->with(["menssaje" => "Microciclo Creado",]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Microciclo  $microciclo
     * @return \Illuminate\Http\Response
     */
    public function show(Microciclo $microciclo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Microciclo  $microciclo
     * @return \Illuminate\Http\Response
     */
    public function edit(Microciclo $microciclo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Microciclo  $microciclo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Microciclo $microciclo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Microciclo  $microciclo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Microciclo $microciclo)
    {
        //
    }
}
