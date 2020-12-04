<?php

namespace App\Http\Controllers;

use App\Mensajeria;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("mensajeria1", ["Mensajes"=>Mensajeria::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("enviarm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new Mensajeria($request->input());
        $nivel->saveOrFail();
        return redirect()->route("Mensajes.index")->with(["menssaje" => "Mensaje enviado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensajeria  $mensajeria
     * @return \Illuminate\Http\Response
     */
    public function show(Mensajeria $mensajeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensajeria  $mensajeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensajeria $mensajeria)
    {
        return view("edimensaje", ["menssaje" => $mensajeria,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensajeria  $mensajeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensajeria $mensajeria)
    {
        $mensajeria->fill($request->input())->saveOrFail();
        return redirect()->route("Mensajes.index")->with(["menssaje" => "Mensaje actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensajeria  $mensajeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensajeria $mensajeria)
    {
        $mensajeria->delete();
        return redirect()->route("Mensajes.index")->with(["menssaje" => "Mensaje eliminado",
        ]);
    }
}
