@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <!-- Falta asignar el action -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Mesociclo</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            <div id="let3">
                                                <a href="{{ route('Mesociclos.create') }}">crear mesociclo</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <table id="tabla">
                                                <tr id="cabe">
                                                    <th>Mesociclo</th>
                                                    <th>Fecha Inicio</th>
                                                    <th>Fecha Fin</th>
                                                    <th>Nº Meses</th>
                                                    <th>Minutos totales</th>
                                                    <th>Nº Sesiones</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                @foreach($mesos as $meso)
                                                    <tr id="cuer">
                                                        <form action="{{ route('Mesociclos.update', [$meso->id]) }}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" name="id" value="{{ $meso->id }}">
                                                            <td><input type="text" name="Mes_Id" value="{{ $meso->Mes_Id }}"></td>
                                                            <td><input type="text" name="Mes_Fecini" value="{{ $meso->Mes_Fecini }}"></td>
                                                            <td><input type="text" name="Mes_Fecfin" value="{{ $meso->Mes_Fecfin }}"></td>
                                                            <td><input type="text" name="Mes_Nummes" value="{{ $meso->Mes_Nummes }}"></td>
                                                            <td><input type="text" name="Mes_Minutos_Totales" value="{{ $meso->Mes_Minutos_Totales }}"></td>
                                                            <td><input type="text" name="Mes_Num_Sesxmes" value="{{ $meso->Mes_Num_Sesxmes }}"></td>
                                                            <td>
                                                                <a href="{{ route('Microciclo',[$meso->id]) }}">
                                                                    <input type="button" value="Microciclos">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <input type="submit" value="Editar">
                                                            </td>
                                                        </form>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @foreach($mesos as $meso)
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro3">
                                            
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection