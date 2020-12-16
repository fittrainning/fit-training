@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row" id="color">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro">
                            <h3>Importar fichas de Excel</h3>
                        </div>
                    </div>

                    
                                <div class="row">
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <a href="{{ route('completa.index') }}">
                                            <input  type="button" value="Subir ficha de entrenamiento deportivo">
                                        </a>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                </div>

                    <div id="colo">
                        <br />
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            Error de validación de carga<br><br>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            @if(Session::has('message'))
                            <p>{{ Session::get('message') }}</p>
                            @endif
                            <div class="form-group">
                                <table class="table table-striped text-center" >
                                    <tr>
                                        <td width="40%" align="right" id="letras">
                                            <label>Seleccionar archivo para cargar</label>
                                        </td>
                                        <td width="30">
                                            <input type="file" name="file" id="letras">
                                        </td>
                                        <td width="30%" align="left">
                                            <input type="submit" name="upload" class="btn btn-primary" value="Cargar">
                                        </td>
                                    </tr>
                                    <tr>
                                        <center><p>
                                            Clic <a href="{{ route('users.excel') }}">aquí</a>
                                            para descargar en EXCEL las fichas
                                        </p></center>

                                        <td width="40%" align="right"></td>
                                        <td width="40%" align="center"><span id="letras"> solo archivos .xls, .xslx</span></td>
                                        <td width="40%" align="left"></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                        <hr id="separa">
                        <div class="row">
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro">
                                        <h3>Registro de fichas</h3>
                                    </div>
                                </div><br>

                        
                                <!--<form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    @if(Session::has('message'))
                                    <p>{{ Session::get('message') }}</p>
                                    @endif
                        
                                    <input type="file" name="file">
                        
                                    <button>Importar Usuarios</button>
                                </form>-->

                                <form action="{{ route('subir') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-left">Codigo</label>
                                                    <div id="let2" class="col-md-6">
                                                        <input type="text" class="form-control" name="Fic_Cod">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-left">Nombre</label>
                                                    <div id="let2" class="col-md-6">
                                                        <input type="text" class="form-control" name="Fic_Nombre">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-left">Tipo</label>
                                                    <div id="let2" class="col-md-6">
                                                        <input type="text" class="form-control" name="Fic_Tipo">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-left">Jornada</label>
                                                    <div id="let2" class="col-md-6">
                                                        <input type="text" class="form-control" name="Fic_Jornada">
                                                    </div>
                                                </div>
                                            </div><br>
                                            
                                            <div class="d-grid gap-4 col-4 mx-auto ">
                                                <input type="submit"  class="btn btn-primary" name="enviar" value="CREAR FICHA">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        </div>
                        <hr id="separa">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="centro">
                                <h3 class="panel-title">Datos fichas</h3>
                            </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="tabla" class="table table-striped text-center" >
                                            <tr id="cabe">
                                                <th>CODIGO FICHA</th>
                                                <th>NOMBRE</th>
                                                <th>TIPO</th>
                                                <th>JORNADA</th>
                                            </tr>
                                            @foreach($data as $row)
                                                <tr id="cuer">
                                                    <td>{{ $row->Fic_Cod }}</td>
                                                    <td>{{ $row->Fic_Nombre }}</td>
                                                    <td>{{ $row->Fic_Tipo }}</td>
                                                    <td>{{ $row->Fic_Jornada }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>

@endsection