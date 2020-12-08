@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" id="colo">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cenn">
                            <h4>Añadir Deporte</h4>
                        </div>
                    </div>
                    <hr id="separa">
                    <div class="row">
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                            <form action="" method="POST">
                                <div id="color" class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-left">Nombre</label>
                                    <div id="let3" class="col-md-8">
                                        <input type="number" name="Dee_nombre" value="">
                                    </div>
                                </div>
                                <div id="color" class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-left">Descripcion</label>
                                    <div id="let3" class="col-md-8">
                                        <textarea name="Dee_detalle" id="mensajes1" cols="93" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button id="but" type="submit">
                                            {{ __('Crear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>
                </div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection