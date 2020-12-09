@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont">
                <br><br><br><br>
                <div class="d-flex justify-content-center" id="colo">
                    <a href=""></a><h1>Entrenadores</h1>
                </div>
                <br>
                <br>
                <table id="tabla">
                    <tr id="cabe">
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Deporte</th>
                        <th>Ficha</th>
                    </tr>
                    @foreach($entrenadores as $entrenador)
                        <tr id="cuer">
                            <td>{{ $entrenador->Ent_Usu_id }}</td>
                            @foreach($users as $user)
                                @if($entrenador->Ent_Usu_id == $user->Usu_id)
                                <td>{{ $user->name }} {{ $user->Usu_apellidos }}</td>
                                <td>{{ $user->email }}</td>
                                @endif
                            @endforeach
                            <td>{{ $entrenador->Ent_Deporte }}</td>
                            <td>{{ $entrenador->Ent_ficha }}</td>
                        </tr>
                    @endforeach
                </table>
                <br><br>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection