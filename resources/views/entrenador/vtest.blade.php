@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div id="color" class="content-box-large">
                                @foreach($rest ?? '' as $rtest)
                                    @if(!empty($rtest->Tes_id)) 
                                        <div class="row">
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8" id="centro">
                                                <br>
                                                <h2>{{ $rtest->Rem_fecha }}</h2>
                                                <br><br>
                                            </div>
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                                <div id="cerrar">
                                                    <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="{{asset ('img/cerrar.png ')}}" width="30" height="30"><!--input rtest de cerrar y regresar a index-->
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                        
                                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <div class="row" id="let4">
                                                    <h4>CALIFICACION:</h4>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        {{ $rtest->Rem_resultado }}
                                                    </div>
                                                </div><br>  
                                            </div>
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div><br><br>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection