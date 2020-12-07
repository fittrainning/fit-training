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
                            <h1 id="titulo">Editar Perfil</h1>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div  class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <a href="{{route("users.index")}}"><img src="{{ asset('img/cerrar.png') }}" width="30" height="30"></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="color" >
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <form method="POST" action="{{route("users.update", [$users])}}" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <!-- IMAGEN -->
                                <div id="color" class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <img src="{{ asset('img').'/'.$users->Usu_foto }}" id="imag">
                                            </div>
                                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                        </div><br>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label text-md-left">Imagen</label>
                                            <div class="col-md-9">
                                                <input id="immm" type="file" name="Usu_foto" value="{{ $users->Usu_foto }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- TELEFONO -->
                                <div id="color" class="form-group row">
                                    <label class="col-md-3 col-form-label text-md-left">Telefono</label>
                                    <div id="let3" class="col-md-9">
                                        <input type="number" name="Usu_telefono" value="{{ $users->Usu_telefono }}">
                                    </div>
                                </div>

                                <!-- DIRECCION -->
                                <div id="color" class="form-group row">
                                    <label class="col-md-3 col-form-label text-md-left">Direccion</label>
                                    <div id="let3" class="col-md-9">
                                        <input type="text" name="Usu_direccion" value="{{ $users->Usu_direccion }}">
                                    </div>
                                </div>
                                
                                <input type="hidden" name="id" value="{{$users->id }}">
                                <input type="hidden" name="Usu_id" value="{{$users->Usu_id }}">
                                <input type="hidden" name="Usu_tipodoc" value="{{$users->Usu_tipodoc }}">
                                <input type="hidden" name="name" value="{{$users->name }}">
                                <input type="hidden" name="Usu_apellidos" value="{{$users->Usu_apellidos }}">
                                <input type="hidden" name="Usu_fecha_nacimiento" value="{{$users->Usu_fecha_nacimiento }}">
                                <input type="hidden" name="Usu_genero" value="{{$users->Usu_genero }}">
                                <input type="hidden" name="email" value="{{$users->email }}">
                                <input type="hidden" name="Usu_rol" value="{{$users->Usu_rol }}">
                                <input type="hidden" name="password" value="{{ $users->password }}">

                                <div class="form-group row mb-0">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <input id="but" type="submit" value="{{ __('Editar') }}">
                                    </div>
                                </div>
                            </form>
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