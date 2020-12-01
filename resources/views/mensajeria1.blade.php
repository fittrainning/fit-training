@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                @if(Session::has('menssaje'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ Session::get('menssaje') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div data-spy="scroll"  data-offset="0" id="color111" class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <div id="centro2"><h2>Enviados</h2></div>
                    @foreach($Mensajes as $Mensaje)
                        @if ($Mensaje->Men_em_Usu_id == Auth::user()->Usu_id)
                        <div id="mensajes">
                            <div class="row" id="mmm">
                                <div class="col-8 col-sm-8 col-md-8 col-lg-9 col-xl-10">
                                    <label>{{$Mensaje->Men_em_Usu_id}} _ {{$Mensaje->Men_Mensaje}}</label>
                                </div>
                                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                                    <a href="{{ route('Mensajes.create') }}">
                                        <img src="{{ asset('img/responder.png') }}" alt="" width="25px">
                                    </a>
                                </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div data-spy="scroll" data-offset="0" id="color111" class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <div id="centro2"><h2>Recibidos</h2></div>
                    @foreach($Mensajes as $Mensaje)
                        @if ($Mensaje->Men_re_Usu_id == Auth::user()->Usu_id)
                        <div id="mensajes">
                            <div class="row" id="mmm">
                                <div class="col-8 col-sm-8 col-md-8 col-lg-9 col-xl-10">
                                    <label>{{$Mensaje->Men_em_Usu_id}} _ {{$Mensaje->Men_Mensaje}}</label>
                                </div>
                                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                                    <a href="{{ route('Mensajes.create') }}">
                                        <img src="{{ asset('img/responder.png') }}" alt="" width="25px">
                                    </a>
                                </a>
                                </div>
                            </div>
                        </div>
                        @endif
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