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
                            <h2 id="titulo">Editar Perfil</h2>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div  class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ ('/home') }}'" type=image src="{{ asset('img/cerrar.png') }}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div>
                    <div class="row" id="color" >
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            @foreach($users as $user)
                                @if($user->Usu_id == Auth::user()->Usu_id)
                                    <div>
                                        <div class="row">
                                            <input type="text" name="id" value="{{$user->id }}">
                                            <input type="text" name="Usu_id" value="{{$user->Usu_id }}">
                                            <input type="text" name="Usu_tipodoc" value="{{$user->Usu_tipodoc }}">
                                            <input type="text" name="name" value="{{$user->name }}">
                                            <input type="text" name="Usu_apellidos" value="{{$user->Usu_apellidos }}">
                                            <input type="text" name="Usu_fecha_nacimiento" value="{{$user->Usu_fecha_nacimiento }}">
                                            <input type="text" name="Usu_genero" value="{{$user->Usu_genero }}">
                                            <input type="text" name="email" value="{{$user->email }}">
                                            <input type="text" name="Usu_rol" value="{{$user->Usu_rol }}">
                                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <img src="..img/ {{$user->Usu_foto }} " id="imag">
                                            </div>
                                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                        </div>
                                        <br>
                                        <!-- IMAGEN -->
                                        <div id="color" class="form-group row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <input id="inp" type="text" name="Usu_foto" value="{{ $user->Usu_foto }}">
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <!-- TELEFONO -->
                                        <div id="color" class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-left">Telefono</label>
                                            <div id="let3" class="col-md-8">
                                                <input type="number" name="Usu_telefono" value="{{ $user->Usu_telefono }}">
                                            </div>
                                        </div>

                                        <!-- DIRECCION -->
                                        <div id="color" class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-left">Direccion</label>
                                            <div id="let3" class="col-md-8">
                                                <input type="text" name="Usu_direccion" value="{{ $user->Usu_direccion }}">
                                            </div>
                                        </div>
                                        <div id="color" class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-left">Contraseña</label>
                                            <div id="let3" class="col-md-8">
                                                <input type="password" name="password" value="{{ $user->password }}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <a id="but" href="{{route("users.edit",[$user])}}">
                                                    {{ __('GUARDAR') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection