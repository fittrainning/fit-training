@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="{{ route('create')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <!-- Falta asignar el action -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
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
                                                    <p>Documento:&nbsp;<input type="text" name="Ana_Dep_id" value="{{ Auth::user()->Usu_id }}"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr id="separa">
                                    <br>
                                    <div class="row d-flex justify-content-center">
                                        <p>
                                            Practica Deporte? &nbsp;
                                            <div id="radio">
                                                <input type="radio" name="Ana_DepPract" value="si" >
                                                <label for="huey">si</label>&nbsp;&nbsp;
                                            </div>

                                            <div id="radio">
                                                <input type="radio" name="Ana_DepPract" value="no">
                                                <label for="dewey">no</label>
                                            </div>
                                        </p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Cual?&nbsp;</p>
                                        <div id="let2">
                                            <input type="text" id="input" name="Ana_depo">
                                        </div>
                                    </div>
                                    <hr id="separa">
                                    <br>

                                    <div class="row d-flex justify-content-center">
                                        <p>
                                            Posee logros deportivos?:&nbsp;
                                        </p>
                                        <div id="radio">
                                                <input type="radio" name="Ana_Logros" value="si" checked>
                                                <label for="huey">si</label>&nbsp;&nbsp;
                                            </div>

                                            <div id="radio">
                                                <input type="radio" name="Ana_Logros" value="no">
                                                <label for="dewey">no</label>
                                            </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Cual? Adjunte pdf</p>&nbsp;
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" name="Ana_Logrosdeportivos" value="logros">
                                        </div>

                                    </div>

                                    <hr id="separa">
                                    <br>
                                    <div class="row d-flex justify-content-center">
                                        <p>
                                            Posee experiencia deportiva? &nbsp;
                                        </p>
                                        <div id="radio">
                                            <input type="radio" name="Ana_HistorialDeportivo" value="si" checked>
                                            <label for="huey">si</label>&nbsp;&nbsp;
                                        </div>

                                        <div id="radio">
                                            <input type="radio" name="Ana_HistorialDeportivo" value="no">
                                            <label for="dewey">no</label>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Cual?&nbsp;</p>
                                        <div id="let2">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <br>
                                    <div id="centro" class="form-group">
                                        <input type="file" class="form-control-file">
                                    </div>
                                    <hr id="separa">
                                    <br>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                        <br>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cenn">
                                                <h3>Historial clinico</h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row d-flex justify-content-center">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <p>Adjunte el archivo de su historial medico: </p>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Ana_HistorialMedico" value="medico">
                                            </div>
                                        </div>
                                        <hr id="separa">
                                        <br>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cenn">
                                                <h3>Alimentacion</h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row d-flex justify-content-center">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <p>Adjunte el archivo de su historial alimenticio: </p>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Ana_HabitosAlimenticios" value="comer">
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <button type="submit" >guardar</button>
                                </div>
                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <img id="centro1" src="{{ asset('../img/Proceso-1.png') }}">
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <a href="{{ route('anam2') }}">
                                        <img id="centro1" src="{{ asset('../img/flechas.png') }}" alt="siguiente">
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
