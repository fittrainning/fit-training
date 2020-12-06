@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="{{ route('Deportes.store') }}" method="post">
                            <!-- Falta asignar el action -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Mesociclo</h2>
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
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let2">
                                                Deportista
                                                <select name="Plan_id_Dep">
                                                    @foreach($deportistas as $deportista)
                                                    <option value="{{ $deportista->Dep_Usu_id }}">
                                                        {{ $deportista->Dep_Usu_id }} - <!--nombre usuario-->
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let2">
                                                Deporte
                                                <select name="Plan_deporte">
                                                    @foreach($deportes as $deporte)
                                                        <option value="{{ $deporte->Dee_cod }}">{{ $deporte->Dee_nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="Plan_res_fuerza" value="0">
                                        <input type="hidden" name="Plan_res_resistencia" value="0">
                                        <input type="hidden" name="Plan_res_velocidad" value="0">
                                        <input type="hidden" name="Plan_res_flexibilidad" value="0">
                                        <input type="hidden" name="Plan_id_Ent" value="{{ Auth::user()->Usu_id }}">
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
                                    <button id="trans" type="submit"><img id="centro1" src="{{ asset('../img/flechas.png') }}" alt="siguiente"></button>
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