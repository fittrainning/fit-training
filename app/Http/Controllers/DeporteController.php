<?php

namespace App\Http\Controllers;

use App\Deporte;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class DeporteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("entrenador.caracterizacion", ["Deportes"=>Deporte::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("entrenador.deporte");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deporte = new Deporte($request->input());
        $deporte->saveOrFail();
        return redirect()->route("Deportes.index")->with(["menssaje" => "Deporte creado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function show(Deporte $deporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Deporte $deporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deporte $deporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deporte $deporte)
    {
        //
    }

    public function tabla($id)
    {
        $dec=Deporte::find($id);
        $deportes=array(0,0,0);
        foreach($dec->ratings as $raiting){
            $deportes[$raiting->$raiting - 1] += 1;
        }
        $lava=new Lavacharts();
        $graficodeportes=$lava->DataTable();
        $graficodeportes->addStringColumn('Dee_nombre')->addNumberColumn('Dee_cod');
        for($i=1; $i <= count($deportes); $i ++){
            $graficodeportes->addRow(['deportes'.$i, $deportes[$i = 1]]);
        }
        $lava->Barchart('Dee_nombre', $graficodeportes);
        return view('estadisticas', ['dec' => $dec, 'lava' => $lava]);
    }
}
