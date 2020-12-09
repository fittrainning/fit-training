<?php

namespace App\Http\Controllers;

use App\Microciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MicrocicloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('microciclo', ["micro"=>Microciclo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $plan=DB::select('select Mes_Id_Gen from tb_planentrenamiento inner join tb_mesociclo on(Pla_id = Mes_Pla_Id) where Pla_id_Ent = ?', $id);
        return view('director.microciclo1', $plan);
        //return view('microciclo1', ["plan"=>Plan::all()]);
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
