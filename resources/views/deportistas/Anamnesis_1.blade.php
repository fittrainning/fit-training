@extends('layouts.deportista')

@section('content')
    <form action="" method="post">
        <!-- Falta asignar el action -->
        <div class="row">
            <div class="col-2">

            </div>
            <div id="fondo1" class="col-8">
                <div class="row">
                    <div class="col-2">
                        <img id="logo" src="../img/logo.png" alt="logo">
                    </div>
                    <div class="col-10">
                        <br>
                        <div class="row">
                            <div class="col-12" id="formu">
                                <h3>Deportista</h3>
                            </div>
                        </div>
                        <br>
                        <div class="row d-flex justify-content-center">
                            <p>Documento: </p>
                            <input type="text" id="input">
                        </div>
                    </div>
                </div>

                <hr id="separa">
                <br>
                <div class="row d-flex justify-content-center">
                    <p>
                        Deporte que practica:
                        <input type="radio" name="Si" value="ola" /> Si

                        <input type="radio" name="No" value="ola" /> No
                    </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Cual? </p>
                    <input type="text" id="input">
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
            <div class="col-2">

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
@endsection