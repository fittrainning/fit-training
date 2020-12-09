@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Mesociclo</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Tipo
                                                <select name="Mes_Id">
                                                    <option value="1">Entrante</option>
                                                    <option value="2">Basico Desarrollador</option>
                                                    <option value="3">Basico Estabilizador</option>
                                                    <option value="4">Control</option>
                                                    <option value="5">Pre-competitivo</option>
                                                    <option value="6">Competencia</option>
                                                    <option value="7">Recuperacion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                    </div>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha Inicio
                                                <input type="date" name="Mes_Fecini">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha Fin
                                                <input type="date" name="Mes_Fecfin">
                                            </div>
                                        </div>
                                        <input type="hidden" name="Pla_id_Ent" value="{{ Auth::user()->Usu_id }}">
                                    </div>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Numero de sesiones
                                                <input type="number" name="Mes_Nummes">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Minutos totales
                                                <input type="number" name="'Mes_Minutos_Totales">
                                            </div>
                                        </div><br><br><br>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                N° sesiones por mes
                                                <input type="number" name="Mes_Num_Sesxmes">
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