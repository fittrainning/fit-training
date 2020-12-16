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
                            <h1 id="titulo">Completa los datos de tu perfil</h1>
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
                            <form action="{{route("director.store")}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                        <input type="hidden" name="Dir_Usu_id" value="{{ Auth::user()->Usu_id }}" readonly>
                                        <div class="row d-flex justify-content-center">
                                            <div id="color" class="form-group row">
                                                <label class="col-lg-4 col-form-label text-lg-left">Especialidad</label>
                                                <div id="let3" class="col-lg-8">
                                                    <input type="text" name="Dir_Especialidad" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <input id="but" type="submit" value="{{ __('Completar') }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection