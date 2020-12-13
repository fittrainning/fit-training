@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="{{ route("Planes.update", [$plan]) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Plan de Entrenamiento</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <input type="text" name="Pla_id" value="{{ $plan->Pla_id }}">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha Inicial
                                                <input type="text" name="Pla_fecini" value="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha Final
                                                <input type="text" name="Pla_fecfin" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Deportista
                                                <input type="text" name="Pla_id_Dep" value="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Deporte
                                                <input type="text" name="Pla_deporte" value="">
                                            </div>
                                        </div>
                                        <input type="hidden" name="Pla_id_Ent" value="{{ Auth::user()->Usu_id }}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        
                                </div>
                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <button id="bott" type="submit">Crear Plan</button>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection