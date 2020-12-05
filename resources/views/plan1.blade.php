@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="" method="post">
                            <!-- Falta asignar el action -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Plan de Entrenamiento</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha Inicial
                                                <input type="date" name="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha Final
                                                <input type="date" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            <div id="let2">
                                                Deporte
                                                <select name="Plan_deporte">
                                                    @foreach($deportes as $deporte)
                                                        <option value="{{ $deporte->Dee_cod }}">{{ $deporte->Dee_nombre }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="Plan_res_fuerza" value=" ">
                                                <input type="hidden" name="Plan_res_resistencia" value=" ">
                                                <input type="hidden" name="Plan_res_velocidad" value=" ">
                                                <input type="hidden" name="Plan_res_flexibilidad" value=" ">
                                                <input type="hidden" name="Plan_id_Ent" value="{{ Auth::user()->Usu_id }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        
                                </div>
                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <img id="centro1" src="{{ asset('../img/Proceso-1.png') }}">
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <a href="{{ route('Planes.index') }}">
                                        <img id="centro1" src="{{ asset('../img/flechas.png') }}" alt="siguiente">
                                    </a>
                                </div>
                            </div>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection