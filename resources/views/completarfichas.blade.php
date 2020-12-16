@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont">
            <div id="fondo">
                <div id="edit"><br><br><br>    
                    <div class="row" id="color" >
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                        <div id="centro" class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h3 id="titulo">Fichas de Entrenamiento Deportivo</h3>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div  class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <a href="{{route("home")}}"><img src="{{ asset('img/cerrar.png') }}" width="30" height="30"></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr id="separa">
                    <div class="row" id="color" >
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                            <form action="{{route("completa.create")}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                        <input type="hidden" name="Fed_id_Dir" value="{{ Auth::user()->Usu_id }}" readonly>
                                        
                                    </div>
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <div class="form-row align-items-center">
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Codigo</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="Fed_cod">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Nombre</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="Fed_nombre">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Tipo</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="Fed_tipo">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Jornada</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="Fed_jornada">
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <input id="but" type="submit" value="{{ __('Completar') }}">
                                        
                                    </div>
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <hr id="separa">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Datos fichas Entrenador</h3>
                                </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped text-center">
                                                <tr>
                                                    <th>Director</th>
                                                    <th>Codigo ficha</th>
                                                    <th>Nombre</th>
                                                    <th>Tipo</th>
                                                    <th>Jornada</th>
                                                </tr>
                                                @foreach($data as $row)
                                                <tr>
                                                    <td>{{ $row->Fed_id_Dir }}</td>
                                                    <td>{{ $row->Fed_cod }}</td>
                                                    <td>{{ $row->Fed_nombre }}</td>
                                                    <td>{{ $row->Fed_tipo }}</td>
                                                    <td>{{ $row->Fed_jornada }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection