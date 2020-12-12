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
                                    <h2 id="centro">Microciclo</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            <div id="let3">
                                                <a href="">crear microciclo</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @foreach($micro as $mic)
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            <div id="let3">
                                                {{ $mic->Mic_id}} - {{ $mic->Mic_tipo}}
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