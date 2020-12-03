@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                        <div  class="col-10"></div>
                        <div  class="col-2 ">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="{{asset ('img/cerrar.png ')}}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div id="color" class="content-box-large">
                                @foreach($bateri as $Boton)
                                    
                                
                                @if(!empty($Boton->Tes_id)) 
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8" id="centro">
                                        <h2>{{ $Boton->Tes_nombre }}</h2>
                                    </div>
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                   
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <strong>OBJETIVO:</strong>
                                        <br>{{ $Boton->Tes_objetivo}}
                                        <br><br>

                                        <strong>DESARROLLO:</strong>
                                        <br>{{ $Boton->Tes_desarrollo }}
                                        <br><br>

                                        <strong>MATERIAL:</strong>
                                        <br>{{ $Boton->Tes_material }}
                                        <br><br>

                                        <strong>EVALUACION:</strong>
                                        <br>{{ $Boton->Tes_evaluacion }}
                                        <br><br>

                                        <strong>IMAGEN:</strong><br>
                                        <br><img src="/uploads/{{ $Boton->Tes_imagen}}">
                                        <br><br><br><br>

                                    </div>
                                    
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection