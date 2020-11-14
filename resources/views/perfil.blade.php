@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont">
            <div id="fondo">
                <form id="edit">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        </div>
                        <div id="centro" class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h2 id="titulo">Editar Perfil</h2><br>
                            <input id="inp" type="file" name="archivo">
                        </div>
                        <div  class="col-10"></div>
                        <div  class="col-2 ">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/') }}'" type=image src="img/cerrar.png" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                        </div>
                        <form action="../controlador/Control_EditarPerfil.php" method="POST" Enctype="multipart/form-data" class="form-group">    
                            
                            <div  id="color" class="card-body">
                                
                                <!--TIPO DE DOCUMENTO -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Tipo de Documento</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="text" readonly value="{{ Auth::user()->Usu_tipodoc }}">
                                        </div>
                                    </div>
                                

                                <!-- DOCUMENTO -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Documento</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="text" readonly value="{{ Auth::user()->Usu_id }}">
                                        </div>
                                    </div>
                                

                                <!-- NOMBRES -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Nombres</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="text" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>

                                <!-- APELLIDOS -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Aellidos</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="text" value="{{ Auth::user()->Usu_apellidos }}">
                                        </div>
                                    </div> 
                                
                                <!-- E-MAIL -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">E-mail</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="email" readonly value="{{ Auth::user()->email }}">
                                        </div>
                                    </div> 

                                <!-- FECHA DE NACIMIENTO -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Fecha de Nacimiento</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="date" value="{{ Auth::user()->Usu_fecha_nacimiento }}">
                                        </div>
                                    </div> 
                                 
                                <!-- TELEFONO -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Telefono</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="number" value="{{ Auth::user()->Usu_telefono }}">
                                        </div>
                                    </div>

                                <!-- DIRECCION -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Direccion</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="text" value="{{ Auth::user()->Usu_direccion }}">
                                        </div>
                                    </div>  

                                <!-- GENERO -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Genero</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="text" value="{{ Auth::user()->Usu_genero }}">
                                        </div>
                                    </div> 

                                <!-- CONTRASEÑA -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Contraseña</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="password" value="{{ Auth::user()->password }}">
                                        </div>
                                    </div>

                                <!-- CONFIRMAR CONTRASEÑA -->
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">Confirmar Contraseña</label>
                                        <div id="let2" class="col-md-6">
                                            <input type="password" value="{{ Auth::user()->password }}">
                                        </div>
                                    </div>
                            </div>

                        </form>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-12">
                            <button id="but" type="submit" class="btn btn-primary">
                                {{ __('GUARDAR') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection