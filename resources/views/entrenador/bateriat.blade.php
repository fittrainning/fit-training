@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="cont"><br><br>

                <table class="table table-borderless">
                    <tr>
                        <th scope="col">
                        <div class="">
                            <div id="cap">
                                <img id="img" src="../img/fuerza.png"><br><br><!--Define la imagen de la capacidad-->
                                <h5>FUERZA</h5><br> 
                            </div>
                        </div>
                        </th>
        
                        <th scope="col">
                        <div class="">
                            <div id="cap">
                                <img id="img" src="../img/velocidad.png"><br><br>
                                <h5>VELOCIDAD</h5><br>
                            </div>
                        </div> 
                        </th>
        
                        <th scope="col">
                        <div  class="">
                            <div id="cap">
                                <img id="img" src="../img/resis.png"><br><br>
                                <h5>RESISTENCIA</h5><br>
                            </div>
                        </div>
                        </th>
                        
                        <th scope="col">
                        <div class="">
                            <div id="cap">
                                <img id="img" src="../img/flex.png"><br><br>
                                <h5>ELASTICIDAD</h5><br>
                            </div>
                        </div>
                        </th>
                    </tr>
                    
                        <tr>
                        
                            <td>
                                <button type="button" class="btn btn-secondary  btn-sm " id="buttonn">
                                    <h6><img id="lo" src="../img/salto.png" alt="img" width="40px">&nbsp;TEST SALTO<br> HORIZONTAL</h6>
                                </button>
                            </td>
                            <td><label type="text" class="usu" name="usu" value=" "></label></td>
                            <td><label type="text" class="sex" name="sex" value=" "></label></td>
                            <td><label type="text" class="cla" name="cla" value=" "></label></td>
                        </tr>
                    
                </table><br>
                
                <a href="{{ url('/boton') }}">
                <button type="button" class="btn btn-secondary  btn-sm"  id="buttons">
                    <img src="../img/22.png" alt="img" width="40px"> &nbsp; AGREGAR TEST
                </button>
                </a><br><br>
            </div>
        </div>
    </div>
@endsection