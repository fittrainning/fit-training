@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <!-- Falta asignar el action -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Mesociclo</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            <div id="let3">
                                                <a href="{{ route('Mesociclos.create') }}">crear mesociclo</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @foreach($mesos as $meso)
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            <div id="let3">
                                                {{ $meso->Mes_Id }}
                                            </div>
                                        </div>
                                        @endforeach
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