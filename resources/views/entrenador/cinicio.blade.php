@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="row">
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9" id="cenn">
                                    <h4>CARACTERIZACIÓN DEL DEPORTE</h4>
                                    <hr id="separa">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" id="vert">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">CARACTERIZACIÓN</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">CONCEPTO DEL JUEGO</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">REGLAMENTO</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">CARACTERISTICAS DE LA POSICIÓN</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">FISIOLOGIA</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">MORFOLOGIA</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">BIOQUIMICA</p></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div><p id="opp">BIOMECANICA</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                    Es un deporte a cíclico, de características motricesintermitentes, de habilidades abiertas; polivalentes.
                                    Su complejidad se debe al estricto reglamento, que obliga al jugador a poseer un alto grado de habilidad especial.
                                    El futbol es una confrontación directa entre dos equipos(cooperación y oposición), con un objetivo determinado,esto es, disputar el balón para convertir un gol o evitarque lo conviertan.
                                    <div class="row">
                                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                            <a href="{{ route('Caracterizacion.index') }}" id="cap">
                                                <div id="cap">
                                                    <div id="botdos">
                                                        <h6>Editar</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                    </div>
                                </div>
                                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
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