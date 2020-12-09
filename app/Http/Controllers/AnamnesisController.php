<?php

namespace App\Http\Controllers;

use App\Anamnesis;
use Illuminate\Http\Request;

class AnamnesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("deportistas.Anamnesis_3", ["Ananmnesis"=>Anamnesis::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $anamnesisdata = request()->all();

        return response()->json($anamnesisdata);
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
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function show(Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anamnesis $anamnesis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anamnesis  $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anamnesis $anamnesis)
    {
        //
    }
}
