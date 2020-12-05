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
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <a href="{{ route('agenda') }}">Agenda</a>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <a href="{{ route('Planes.create') }}">Plan de Entrenamiento</a>
                                    </div>
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