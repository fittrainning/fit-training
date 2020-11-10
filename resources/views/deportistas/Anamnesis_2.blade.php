@extends('layouts.deportista')

@section('name')
<form action="" method="post"><!-- Falta asignar el action -->
        <div class="row">
            <div class="col-2">

            </div>
            <div id="fondo1" class="col-8">
                <br>
                <h4>Historial clinico</h4>
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
                <h4>Alimentacion</h4>
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
            <div class="col-2">

            </div>

        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-2">
                <a href="Anamnesis_1.php"><img id="fle1" src="../img/flechas_1.png" alt="atras" width="30%"></a>
            </div>
            <div class="col-8">
                <br>
                <img id="centro" src="../img/Proceso-2.png" width="30%">
            </div>
            <div class="col-2">
                <a href="Anamnesis_3.php"><img id="fle" src="../img/flechas.png" alt="siguiente" width="30%"></a>
            </div>
        </div>
    </form>
@endsection
                
            