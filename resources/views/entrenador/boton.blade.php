@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont">
            <div id="fondo">
                <form id="edit">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        </div><br><br>

                        <div  class="col-10"></div>
                        <div  class="col-2 ">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="img/cerrar.png" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                        </div>
                        <form action = "{{ url('/boton') }}" method="POST" Enctype="multipart/form-data" class="form-group">    
                            
                            <div>
                                
                            <!--TITULO -->
                                <div id="color" class="form-group row">

                                    <label class="col-md-4 col-form-label text-md-left">TÍTULO</label>
                                    <div id="let2" class="col-md-6">
                                        <input id="msg" type="text" name="Nombre"  placeholder="Titulo" class="form-control placeholder" required>
                                    </div>
                                </div>
                                
                                <!-- CAPACIDAD -->
                                
                                    <div id="color" class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-left">CAPACIDAD</label>
                                        <div id="let3" class="col-md-6">
                                            <select id="selectb" name="Capacidad" class="form-control" required>
                                                <option> Seleccione la Capacidad</option>
                                                    <option value="Fuerza">Fuerza</option>
                                                    <option value="Velocidad">Velocidad</option>
                                                    <option value="Resistencia">Resisitencia</option>
                                                    <option value="Elasticidad">Elasticidad</option>
                                            </select>
                                        </div>
                                    </div> 

                                <!--OBJETIVO -->

                                <div id="color" class="form-group row">

                                    <label class="col-md-4 col-form-label text-md-left">OBJETIVO</label>
                                    <div id="let2" class="col-md-6">
                                        <input id="msg" type="text" name="Objetivo"  placeholder="Objetivo" class="form-control placeholder" required>
                                    </div>
                                </div>

                                <!--DESARROLLO -->

                                <div id="color" class="form-group row">

                                    <label class="col-md-4 col-form-label text-md-left">DESARROLLO</label>
                                    <div id="let2" class="col-md-6">
                                        <textarea id="msg" type="text" name="Desarrollo"  placeholder="Desarrollo" class="form-control placeholder" required></textarea>
                                    </div>
                                </div>

                                <!--MATERIAL-->

                                <div id="color" class="form-group row">

                                    <label class="col-md-4 col-form-label text-md-left">MATERIAL</label>
                                    <div id="let2" class="col-md-6">
                                        <input id="msg" type="text" name="Material"  placeholder="Material" class="form-control placeholder" required>
                                    </div>
                                </div>

                                <!--EVALUACION-->

                                <div id="color" class="form-group row">

                                    <label class="col-md-4 col-form-label text-md-left">EVALUACION</label>
                                    <div id="let2" class="col-md-6">
                                        <input id="msg" type="text" name="Evaluacion"  placeholder="Evaluacion" class="form-control placeholder" required>
                                    </div>
                                </div>

                                <p id="letras">Seleccione una imagen correspondiente al test</p>
                                <!-- IMAGEN -->
                                    <div id="color" class="form-group row">
                                        
                                        <label class="col-md-4 col-form-label text-md-left">IMAGEN</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control-file" name="Foto">
                                        </div>
                                    </div>
                            </div>
                        
                        </form>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-12">
                            <button id="but" type="submit" name="Agregar" class="btn btn-primary">
                                {{ __('AGREGAR') }}
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