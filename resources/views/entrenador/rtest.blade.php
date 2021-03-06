
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row" id="color">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    
                        </div>
    
                        <div  class="col-10"></div>
                        <div  class="col-2 ">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="{{asset ('img/cerrar.png ')}}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div>
                    <div id="colo">
                        <br>
                    
                        <div class="row">
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="centro">
                                        <h3>Registro de Resultados</h3>
                                    </div>
                                </div>
                                <hr id="separa">
                                <form action = "{{ route('subirt') }}" method="POST" class="form-group">    
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div id="color" class="content-box-large">
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-right">TEST</label>
                                                    <div id="let3" class="col-md-6">    
                                                        <select name="Rem_Tes_id" id="">
                                                            @foreach($tests as $test)
                                                                <option value="{{ $test->Tes_id }}">{{ $test->Tes_nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <!-- SELECT-->
            
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-right">DOCUMENTO</label>
                                                    <div id="let3" class="col-md-6">
                                                        <select name="Rem_Usu_id">
                                                            @foreach($deportes as $depo)
                                                                <option value="{{ $depo->Dep_Usu_id }}">
                                                                    {{ $depo->Dep_Usu_id }} <!--nombre usuario-->
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div> 
            
                                                <!-- FECHA -->
                                                <div class="form-group row">
                                                    <label for="Usu_fecha_nacimiento" class="col-md-4 col-form-label text-md-right">FECHA</label>
            
                                                    <div id="let" class="col-md-6">
                                                        <input id="Usu_fecha_nacimiento" type="date" class="form-control" name="Rem_fecha" required >
                                                    </div>
                                                </div>
            
                                                <!-- SELECT-->
                                                
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label text-md-right">CALIFICACION</label>
                                                    <div id="let3" class="col-md-6">
                                                        <select id="selectb" name="Rem_resultado" class="form-control" required>
                                                            <option> Seleccione la Calificacion</option>
                                                                <option value="5">Excelente</option>
                                                                <option value="4">Buena</option>
                                                                <option value="3">Aceptable</option>
                                                                <option value="2">Deficiente</option>
                                                                <option value="1">Critico</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <center><p>Seleccione una Calificacion donde 5 es Excelente y 1 es Critico</p></center>
                                            </div>
                                        </div>
                                    </div><br><br>
                                   
                                    <div class="form-group row mb-0">
                                        <div class=" col-12  text-center">   
                                            <button type="submit" class="btn btn-secondary  btn-sm"  id="buttonns">
                                                <img src="{{ asset('../img/guardar.png') }}" alt="img" width="35px"> &nbsp; GUARDAR RESULTADO
                                            </button>
                                        </div>
                                    </div> 
                                   
                                </form>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
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