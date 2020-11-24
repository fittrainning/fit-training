@extends('layouts.director')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont">
                <br><br><br><br>
                <div class="d-flex justify-content-center" id="colo">
                    <h1>Gestion de Fichas </h1>
                </div>
                <br>
                <br>
                <div class="d-flex justify-content-around">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Ver Fichas Creadas
                    </button>
            
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Fichas Creadas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Numero Ficha</th>
                                                <th scope="col">Nombre De Ficha</th>
                                                <th scope="col">Tipo De ficha</th>
                                                <th scope="col">Jornada De Ficha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1907123</th>
                                                <td>Analisis y desarrollo de sistemas de informacion  </td>
                                                <td>Tecnologo </td>
                                                <td>Mañana</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10031232</th>
                                                <td>Sistemas  </td>
                                                <td>Tecnico </td>
                                                <td>Mañana</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1123121</th>
                                                <td>Contabilidad  </td>
                                                <td>Tecnologo </td>
                                                <td>Tarde </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Ingresar Ficha 
                    </button>
            
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Ingresar Fichas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="../controlador/subir_archivo_ficha.php" method="POST" >
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="tabla">
                                                    <option selected>Tipo de ficha.</option>
                                                    <option value="1">General</option>
                                                    <option value="2">Entrenamiento Deportivo</option>
                                                    <option value="3">Organizacion Exterior</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Numero ficha</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="codigo_ficha">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Nombre  Ficha</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="nombre_ficha" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Tipo de Ficha  </label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="tipo_ficha" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-5 col-form-label">Jornada  ficha</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control"  name="jornada_ficha">
                                                </div>
                                            </div>
                                                
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Ingrese un archivo  para Ingresar fichas</label>
                                                <input type="file" >
                                            </div>
                                            <input type="submit"  class="btn btn-primary" name="enviar" value="SUBIR FICHA">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection