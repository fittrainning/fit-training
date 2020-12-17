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
                            
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        
                        <div  class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <a href="{{route("home")}}"><img src="{{ asset('img/cerrar.png') }}" width="30" height="30"></a>
                            </div>
                        </div>
                    </div>
                    <h3 id="xd" class=" text-md-center">Fichas de Entrenamiento Deportivo</h3>
                    <br>
                    <hr id="separa">
                    <div class="row" id="color" >
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                            <form action="{{route("subirr")}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                        <input type="hidden" name="Fed_id_Dir" value="{{ Auth::user()->Usu_id }}" readonly>
                                        
                                    </div>
                                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                    
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                                
                                            <div class="form-group row">
                                                <label  class="col-md-4 col-form-label text-md-left" >Codigo</label>
                                                <div id="let2" class="col-md-6">
                                                    <input type="text" class="form-control" name="Fed_cod">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-md-4 col-form-label text-md-left" >Nombre</label>
                                                <div id="let2" class="col-md-6">
                                                    <input type="text" class="form-control" name="Fed_nombre">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-md-4 col-form-label text-md-left" >Tipo</label>
                                                <div id="let2" class="col-md-6">
                                                    <input type="text" class="form-control" name="Fed_tipo">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-md-4 col-form-label text-md-left" >Jornada</label>
                                                <div id="let2" class="col-md-6">
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
                                    <h3 id="xd" class=" text-md-center">Datos fichas Entrenador</h3><br>
                                </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="tabla" class="table table-striped text-center" >
                                                <tr id="cabe">
                                                    <th>DIRECTOR</th>
                                                    <th>CODIGO FICHA</th>
                                                    <th>NOMBRE</th>
                                                    <th>TIPO</th>
                                                    <th>JORNADA</th>
                                                </tr>
                                                @foreach($data as $row)
                                                <tr id="cuer">
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