@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>

                <table class="table table-borderless">
                    <tr>
                        <th scope="col">
                        <div class="">
                            <div id="cap">
                                <img id="img" src="{{ asset('../img/fuerza.png') }}"><br><br><!--Define la imagen de la capacidad-->
                                <h5>FUERZA</h5><br> 
                            </div>
                        </div>
                        </th>
        
                        <th scope="col">
                        <div class="">
                            <div id="cap">
                                <img id="img" src="{{ asset('../img/velocidad.png') }}"><br><br>
                                <h5>VELOCIDAD</h5><br>
                            </div>
                        </div> 
                        </th>
        
                        <th scope="col">
                        <div  class="">
                            <div id="cap">
                                <img id="img" src="{{ asset('../img/resis.png') }}"><br><br>
                                <h5>RESISTENCIA</h5><br>
                            </div>
                        </div>
                        </th>
                        
                        <th scope="col">
                        <div class="">
                            <div id="cap">
                                <img id="img" src="{{ asset('../img/flex.png') }}"><br><br>
                                <h5>ELASTICIDAD</h5><br>
                            </div>
                        </div>
                        </th>
                    </tr>
                    @foreach($bateria as $Boton)
                        
                    
                    <!--RESULTADO -->
                        <tr>
                            @if($Boton->Tes_capacidad == 'Fuerza')
                                <td>
                                    <a type="button" class="btn btn-secondary  btn-sm " id="buttonn" href="{{ route('dbateria') }}">
                                        <h6><img id="lo" src="{{asset('img/clipboard.png')}}" alt="img" width="40px">&nbsp;{{ $Boton -> Tes_nombre }}</h6>
                                    </a>
                                </td>
                            @endif
                            @if($Boton->Tes_capacidad == 'Velocidad')
                                <td> 
                                    <a type="button" class="btn btn-secondary  btn-sm " id="buttonn" href="{{ route('dbateria') }}">
                                        <h6><img id="lo" src="{{asset('img/clipboard.png')}}" alt="img" width="40px">&nbsp;{{ $Boton -> Tes_nombre }}</h6>
                                    </a>
                                </td>
                            @endif
                            @if($Boton->Tes_capacidad == 'Resistencia')
                                <td>
                                    <a type="button" class="btn btn-secondary  btn-sm " id="buttonn" href="{{ route('dbateria') }}">
                                        <h6><img id="lo" src="{{asset('img/clipboard.png')}}" alt="img" width="40px">&nbsp;{{ $Boton -> Tes_nombre }}</h6>
                                    </a>
                                </td>
                            @endif
                            @if($Boton->Tes_capacidad == 'Elasticidad')
                                <td>
                                    <a type="button" class="btn btn-secondary  btn-sm " id="buttonn" href="{{ route('dbateria') }}">
                                        <h6><img id="lo" src="{{asset('img/clipboard.png')}}" alt="img" width="40px">&nbsp;{{ $Boton -> Tes_nombre }}</h6>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </table><br>
                
                <a href="{{ route('boton') }}">
                <button type="button" class="btn btn-secondary  btn-sm"  id="buttons">
                    <img src="{{ asset('../img/22.png') }}" alt="img" width="40px"> &nbsp; AGREGAR TEST
                </button>
                </a><br><br>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection