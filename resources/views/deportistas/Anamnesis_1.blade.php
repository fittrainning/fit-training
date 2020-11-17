@extends('layouts.deportista')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="" method="post">
                            <!-- Falta asignar el action -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="row">
                                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <img id="logo" src="{{ asset('../img/logo.png') }}" alt="logo">
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                            <br>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h3>Deportista</h3>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div id="let2">
                                                    <p>Documento:&nbsp;<input type="text" name="doc"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <hr id="separa">
                                    <br>
                                    <div class="row d-flex justify-content-center">
                                        <p>
                                            Deporte que practica:&nbsp;
                                            <div>
                                                <input type="radio" id="huey" name="drone" value="huey" checked>
                                                <label for="huey">si</label>&nbsp;&nbsp;
                                              </div>
                                              
                                              <div>
                                                <input type="radio" id="dewey" name="drone" value="dewey">
                                                <label for="dewey">no</label>
                                              </div>
                                        </p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Cual? </p>
                                        <div id="let2">
                                            <input type="text" id="input">
                                        </div>
                                    </div>
                                    <hr id="separa">
                                    <br>
        
                                    <div class="row d-flex justify-content-center">
                                        <p>
                                            Posee logros deportivos?:
                                            <input type="radio" name="1" value="boton1" /> Si
        
                                            <input type="radio" name="2" value="boton2" /> No
                                        </p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Cual? Adjunte pdf</p>&nbsp;
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
        
                                    </div>
        
                                    <hr id="separa">
                                    <br>
                                    <div class="row d-flex justify-content-center">
                                        <p>
                                            Posee experiencia deportiva?:
                                            <input type="radio" name="111" value="Si" /> Si
        
                                            <input type="radio" name="211" value="No" /> No
                                        </p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Cual? </p>
                                        <input type="text" id="input">
                                    </div>
                                    <br>
                                    <div class="form-group d-flex justify-content-center">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2">
        
                                </div>
                                <div class="col-8">
                                    <br>
                                    <img id="centro" src="../img/Proceso-1.png" width="30%">
                                </div>
                                <div class="col-2">
                                    <a href="{{ url('/anamnesis_2') }}">
                                        <img id="fle" src="{{ asset('../img/flechas.png') }}" alt="siguiente" width="30%">
                                    </a>
                                </div>
                            </div>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection