@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" id="colo">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cenn">
                            <h4>CARACTERIZACIÓN DEL DEPORTE</h4>
                        </div>
                    </div>
                    <hr id="separa">
                    <div class="row">
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                            Es un deporte a cíclico, de características motricesintermitentes, de habilidades abiertas; polivalentes.
                            Su complejidad se debe al estricto reglamento, que obliga al jugador a poseer un alto grado de habilidad especial.
                            El futbol es una confrontación directa entre dos equipos(cooperación y oposición), con un objetivo determinado,esto es, disputar el balón para convertir un gol o evitarque lo conviertan.
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-6 col-md-6 col-lg-8 col-xl-8"></div>
                        <div class="col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <a href="{{ route('caracterizacion/editardeporte') }}" id="cap">
                                <div id="cap">
                                    <div id="botdos">
                                        <h6>Editar</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection