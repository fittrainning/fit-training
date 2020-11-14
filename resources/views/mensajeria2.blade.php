@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div id="color111" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div id="mensajes">
                        <div class="row" id="mmm">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                Mensajeria
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div><br><br>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div id="color111" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <textarea name="" id="mensajes1" cols="93" rows="10"></textarea>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
            <div class="row">
                <div class="col-10">
                </div>
                <div class="col-2">
                    <br>
                    <a href="{{ route('mensajeria') }}">
                        <img src="{{ asset('img/envio.png') }}" alt="" width="50px">
                    </a>
                </div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection