@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
                
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                        </div>
                        <div  class="col-10"></div>
                        <div  class="col-2 ">
                            <div id="cerrar">
                                <input OnClick="location.href='{{ url('/bateria') }}'" type=image src="img/cerrar.png" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div><br><br>
                    <div id="color" class="content-box-large">
                    
                        <div class="panel-heading">
                    
                            <div class="panel-title">
                                <h2>titulo</h2></div>
                    
                        </div>
                    
                        <div class="panel-body">
                    
                            <section class="example mt-4">
                    
                                <strong>OBJETIVO:</strong>
                                <br>
                    
                                <br>
                                <br>
                    
                                <strong>DESARROLLO:</strong>
                                <br> 
                    
                                <br>
                                <br>
                    
                                
                                <strong>MATERIAL:</strong>
                                <br> 
                    
                                <br>
                                <br>
                                
                                <strong>EVALUACION:</strong>
                                <br> 
                    
                                <br>
                                <br>
                    

                    
                                <strong>IMAGEN:</strong>
                                <br>
                    
                                <!-- Mostramos todas las imágenes pertenecientes a a este registro -->

                    
                                <br><br>
                    
                                
                    
                            </section>
                    
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection