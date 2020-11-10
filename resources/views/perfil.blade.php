@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div id="cont">
            <div id="fondo">
                <form id="edit">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        </div>
                        <div id="centro" class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <h2 id="titulo">Editar Perfil</h2>
                            <input id="inp" type="file" name="archivo">
                        </div>
                        <div  class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div  class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/') }}'" type=image src="img/cerrar.png" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                        </div>
                        <form action="../controlador/Control_EditarPerfil.php" method="POST" Enctype="multipart/form-data">    

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <p id="inp1">Tipo de Documento</p>
                                <p id="inp1">Documento</p>
                                <p id="inp1">Nombres</p>
                                <p id="inp1">Apellidos</p>
                                <p id="inp1">E-mail</p>
                                <p id="inp1">Fecha de Nacimiento</p>
                                <p id="inp1">Telefono</p>
                                <p id="inp1">Direccion</p>
                                <p id="inp1">Genero</p>
                                <p id="inp1">Contraseña</p>
                                <p id="inp1">Confirmar Contraseña</p>
                            </div>

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <input id="inp" type="hidden" value=""><br>
                                <input id="inp" type="hidden" value=""><br>
                                <input id="inp" type="text" value=""><br>
                                <input id="inp" type="text" value=""><br>
                                <input id="inp" type="email" value=""><br>
                                <input id="inp" type="date" value=""><br>
                                <input id="inp" type="number" value=""><br>
                                <input id="inp" type="text" value=""><br>
                                <input id="inp" type="text" value=""><br>
                                <input id="inp" type="password" value=""><br>
                                <input id="inp" type="password" value=""><br>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        </div>
                        <div id="centro1" class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <input id="sub" type="submit" name="actualizar" value="GUARDAR">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection