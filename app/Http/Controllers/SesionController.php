<?php

namespace App\Http\Controllers;

use App\Sesion;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('agenda');
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
        $datosEvento=request()->except(['_token','_method']);
        sesion::insert($datosEvento);
        print_r($datosEvento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data['sesion']=Sesion::all();
        return response()->json($data['sesion']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesion $sesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sesion $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sesion $sesion)
    {
        //
    }
}
