@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
                    
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8"></div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="{{asset ('img/cerrar.png ')}}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div><br><br>
                    test
                </div>
            </div>
        </div>
    </div>
@endsection