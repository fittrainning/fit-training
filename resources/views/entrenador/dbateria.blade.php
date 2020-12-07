@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div id="color" class="content-box-large">
                                @foreach($bateri as $Boton)
                                    @if(!empty($Boton->Tes_id)) 
                                        <div class="row">
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8" id="centro">
                                                <br>
                                                <h2>{{ $Boton->Tes_nombre }}</h2>
                                                <br><br>
                                            </div>
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                                <div id="cerrar">
                                                    <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="{{asset ('img/cerrar.png ')}}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                        
                                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <div class="row" id="let4">
                                                    <h4>OBJETIVO</h4>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        {{ $Boton->Tes_objetivo}}
                                                    </div>
                                                </div><br>
                                                <div class="row" id="let4">
                                                    <h4>DESARROLLO:</h4>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        {{ $Boton->Tes_desarrollo }}
                                                    </div>
                                                </div><br>
                                                <div class="row" id="let4">
                                                    <h4>MATERIAL:</h4>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        {{ $Boton->Tes_material }}
                                                    </div>
                                                </div><br>
                                                <div class="row" id="let4">
                                                    <h4>EVALUACION:</h4>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        {{ $Boton->Tes_evaluacion }}
                                                    </div>
                                                </div><br>
                                                <div class="row" id="let4">
                                                    <h4>IMAGEN:</h4>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><br>
                                                        <img width ="35%" src="/uploads/{{ $Boton->Tes_imagen}}"><br><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div><br><br>
                            <!--<div class="form-group row mb-0">
                                <div class=" col-12 text-center">
                                    <a href="{{ route('rtest') }}">
                                        <button type="button" class="btn btn-secondary  btn-sm"  id="buttonns">
                                            <img src="{{ asset('../img/22.png') }}" alt="img" width="40px"> &nbsp; INGRESAR RESULTADO
                                        </button>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection