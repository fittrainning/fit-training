@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont">
                <br><br><br><br>
                <div class="d-flex justify-content-center" id="colo">
                    <h1>Entrenadores</h1>
                </div>
                <br>
                <br>
                <table id="tabla">
                    <tr id="cabe">
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Ficha</th>
                        <th>Plan</th>
                    </tr>
                    <tr id="cuer">
                        <td>{{ Auth::user()->Usu_id }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ Auth::user()->Usu_apellidos }}</td>
                        <td>1907163</td>
                        <td><a href="{{ route('plan') }}"><input id="inn" type="button" value="ver"></a></td>
                    </tr>
                </table>
                <br><br>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection