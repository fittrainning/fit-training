@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
    <div id="cont"><br><br>
            
        <!--Icono de cerrar-->
        <div class="row bm" id="cerrar">
            <p><input type="image" name="botondeenvio" src="../img/equis.png"  width="40px"></p>
        </div><br><br><br>
        
        <!--FORMULARIO-->
        <div class="form">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <form action = "../controlador/controlBoton.php" method="POST" Enctype="multipart/form-data">
            
                    <label for="name" id="titulo">TÍTULO</label>
                    <input id="msg" type="text" name="nombre"  placeholder="Titulo" class="form-control placeholder" required><br><br>
    
                    <div class="form-group">
                    <p>Capacidad</p>
                    <select name="capacidad" class="form-control"  required>
                        <option> Seleccione la Capacidad</option>
                            <option value="Fuerza">Fuerza</option>
                            <option value="Velocidad">Velocidad</option>
                            <option value="Resistencia">Resisitencia</option>
                            <option value="Elasticidad">Elasticidad</option>
                    </select><br>
    
                    <label for="name"><h6>INSERTE LA IMAGEN CORRESPONDIENTE AL TEST</h6></label><br><br>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="foto">
                    </div><br><br>
    
                    <button type="submit" class="btn btn-secondary  btn-sm " name="crear" id="buttons">
                        <img src="../img/22.png" alt="img" width="40px"> &nbsp; GUARDAR
                    </button>
                </form>
            </div>
        </div>
    </div><br>
</div>
</div>

@endsection