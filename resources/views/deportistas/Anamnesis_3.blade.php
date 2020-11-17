@extends('layouts.deportista')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="fondo1" class="col-10">
                        <img id="centro1" src="{{ asset('../img/construccion.png') }}" alt="img" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <a href="{{ route('anam2') }}">
                        <img id="centro1" src="{{ asset('../img/flechas_1.png') }}" alt="atras">
                    </a>
                </div>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <img id="centro1" src="{{ asset('../img/Proceso-3.png') }}">
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <a href="{{ url('/iniciode') }}">
                        <img id="centro1" src="{{ asset('../img/flechas.png') }}" alt="siguiente">
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection
