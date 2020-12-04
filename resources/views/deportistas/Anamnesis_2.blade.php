@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="" method="post"><!-- Falta asignar el action -->
                            <div class="row">
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
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <a href="{{ route('anam1') }}">
                                        <img id="centro1" src="{{ asset('../img/flechas_1.png') }}" alt="atras">
                                    </a>
                                </div>
                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <img id="centro1" src="{{ asset('../img/Proceso-2.png') }}">
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <a href="{{ route('anam3') }}">
                                        <img id="centro1" src="{{ asset('../img/flechas.png') }}" alt="siguiente">
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection
                
            