@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                <h2 id="centro">Plan de Entrenamiento</h2>
                                <hr id="separa"><br>
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <a href="{{ route('sesion.index') }}">
                                            <div id="bott">Ver Agenda</div>
                                        </a>
                                    </div>
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                </div>
                                <hr id="separa">
                                <div class="row">
                                    @foreach($planes as $plan)
                                        @if(Auth::user()->Usu_id == $plan->Pla_id_Ent)
                                            <input type="hidden" name="Pla_id" value="{{ $plan->Pla_id }}">
                                            <input type="hidden" name="Pla_fecini" value="{{ $plan->Pla_fecini }}">
                                            <input type="hidden" name="Pla_fecfin" value="{{ $plan->Pla_fecfin }}">
                                            <input type="hidden" name="Pla_deporte" value="{{ $plan->Pla_deporte }}">
                                            <input type="hidden" name="Pla_id_Ent" value="{{ $plan->Pla_id_Ent }}">
                                            <input type="hidden" name="Pla_id_Dep" value="{{ $plan->Pla_id_Dep }}">
                                            <!--<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <a href="{ { route("Planes.edit", [$plan-> Pla_id]) }}">
                                                    <div id="bott">Editar Plan de<br>Entrenamiento</div>
                                                </a>
                                            </div>-->
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <a href="{{ route('Mesociclos.index') }}">
                                                    <div id="bott">Mesociclos</div>
                                                </a>
                                            </div>
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                        @else
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <a href="{{ route('Planes.create') }}">
                                                    <div id="bott">Crear Plan de<br>Entrenamiento</div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection
