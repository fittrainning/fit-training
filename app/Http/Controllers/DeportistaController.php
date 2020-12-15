<?php

namespace App\Http\Controllers;

use App\Deportistas;
use Illuminate\Http\Request;

class DeportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
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
        $deportista = new Deportistas($request->input());
        $deportista->saveOrFail();
        return redirect()->route("anam1")->with(["menssaje" => "campos registrados",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function show(Deportistas $deportistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Deportistas $deportistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deportistas $deportistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deportistas $deportistas)
    {
        //
    }
}
