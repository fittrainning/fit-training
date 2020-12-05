<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Deporte;
use App\Deportistas;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function plan2()
    {
        return view('plan2');
    }
    public function plan3()
    {
        return view('plan3');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plan1', ["deportistas"=>Deportistas::all()], ["deportes"=>Deporte::all()]);
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
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view("plan2", ["planes" => $plan,]);
    }
    public function edit2(Plan $plan)
    {
        return view("plan2", ["deportes"=>Deporte::all()]);
    }
    public function edit3(Plan $plan)
    {
        return view("plan3", ["deportes"=>Deporte::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
