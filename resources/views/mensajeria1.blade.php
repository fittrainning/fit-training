@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div data-spy="scroll" id="color111" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">

                    @foreach($Mensajes as $Mensaje)
                        <div id="mensajes">
                            <div class="row" id="mmm">
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11">
                                    <label>{{$Mensaje->Men_Mensaje}}</label>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-1">
                                    <a href="{{ route('Mensajes.create') }}">
                                        <img src="{{ asset('img/responder.png') }}" alt="" width="25px">
                                    </a>
                                </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <a href="{{ route('Mensajes.create') }}"><button id="mensabot">Enviar Mensaje</button></a>
                </div>
                <div class="col-3"></div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection