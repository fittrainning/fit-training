@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row" id="color">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro">
                            <h3>Deportes</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <a href="{{ route('caracterizacion/deporte') }}">
                                <div id="cap">
                                    <div id="botdos">
                                        <h5>FUTBOL</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('caracterizacion/deporte') }}">
                                <div id="cap">
                                    <div id="botdos">
                                        <h5>BALONCESTO</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('caracterizacion/deporte') }}">
                                <div id="cap">
                                    <div id="botdos">
                                        <h5>ATLETISMO</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('caracterizacion/deporte') }}">
                                <div id="cap">
                                    <div id="botdos">
                                        <h5>VOLEIBOL</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <a href="{{ route('caracterizacion/deporte') }}">
                                <div id="cap">
                                    <div id="botdos">
                                        <h5>Agregar</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection