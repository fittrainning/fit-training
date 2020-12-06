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
                            @foreach($user as $use)
                                @if ($use->Usu_id == Auth::user()->Usu_id)
                                    <form action="{{ route('Users.update', Auth::user()->id) }}" method="POST" Enctype="multipart/form-data" class="form-group">
                                        @csrf
                                        <br><br>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <img src="..img/ {{$use->Usu_foto }} " id="imag">
                                                </div>
                                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                            </div>
                                            <br>
                                            <!-- IMAGEN -->
                                            <div id="color" class="form-group row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <input id="inp" type="file" name="Usu_foto">
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            
                                            
                                            
                                            <!-- TELEFONO -->
                                            <div id="color" class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-left">Telefono</label>
                                                <div id="let3" class="col-md-8">
                                                    <input type="number" value="{{ $use->Usu_telefono }}">
                                                </div>
                                            </div>

                                            <!-- DIRECCION -->
                                            <div id="color" class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-left">Direccion</label>
                                                <div id="let3" class="col-md-8">
                                                    <input type="text" value="{{ $use->Usu_direccion }}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <button id="but" type="submit" class="btn btn-primary">
                                                        {{ __('GUARDAR') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    </div>
                    <div class="row"  id="color">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            @foreach($depor as $depo)
                                @if ($depo->Dep_Usu_id == Auth::user()->Usu_id)
                                    <form action="" method="POST" Enctype="multipart/form-data" class="form-group">
                                        @csrf
                                        <br><br>
                                        <div class="">
                                            <!-- TELEFONO -->
                                            <div id="color" class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-left">Telefono</label>
                                                <div id="let3" class="col-md-8">
                                                    <input type="number" value="{{ $depo->Dep_deporte }}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <button id="but" type="submit" class="btn btn-primary">
                                                        {{ __('GUARDAR') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            @endforeach

                            @foreach($entre as $ent)
                                @if ($ent->Ent_Usu_id == Auth::user()->Usu_id)
                                    <form action="" method="POST" Enctype="multipart/form-data" class="form-group">
                                        @csrf
                                        <br><br>
                                        <div class="">
                                            <!-- TELEFONO -->
                                            <div id="color" class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-left">Telefono</label>
                                                <div id="let3" class="col-md-8">
                                                    <input type="text" value="{{ $ent->Ent_Deporte }}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <button id="but" type="submit" class="btn btn-primary">
                                                        {{ __('GUARDAR') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            @endforeach
                            
                            @foreach($direc as $dire)
                                @if ($dire->Dir_Usu_id == Auth::user()->Usu_id)
                                    <form action="" method="POST" Enctype="multipart/form-data" class="form-group">
                                        @csrf
                                        <br><br>
                                        <div class="">
                                            <!-- TELEFONO -->
                                            <div id="color" class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-left">Telefono</label>
                                                <div id="let3" class="col-md-8">
                                                    <input type="number" value="{{ $dire->Dir_Especialidad }}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <button id="but" type="submit" class="btn btn-primary">
                                                        {{ __('GUARDAR') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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