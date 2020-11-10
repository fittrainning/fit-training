@extends('layouts.deportista')

@section('content')
    <div class="row">
        <div class="col-1">

        </div>
            <div id="fondo1" class="col-10">
                <img id="img" src="../img/construccion.png" alt="img" >
            </div>
        <div class="col-1">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            <a href="{{ url('/anamnesis_2') }}"><img id="fle1" src="../img/flechas_1.png" alt="siguiente" width="30%"></a>
        </div>
        <div class="col-8">
            <br>
            <img id="centro" src="../img/Proceso-3.png" width="30%">
        </div>
        <div class="col-2">
            <a href="inicio_depor.php"><button type="button" class="btn btn-info">Confirmar</button></a>
        </div>
    </div>
@endsection
