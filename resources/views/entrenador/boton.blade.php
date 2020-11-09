<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Bateria de test</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../css/registro_test.css">
        <link rel="icon" type="image/png" href="../img/logo.png">
    </head>

    <body>
        <div class="container-fluid">
            <div id="nav" class="row">
                <nav class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <a href="inicio_entrenador.php" id="home"><img src="../img/logo.png" width="60px"></a>
                </nav>
                <nav class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <li class="nav dropdown justify-content-end">
                        <a href="En_construccion.php" class="nav-link dropdown" role="button">
                            <img src="../img/men.png" alt="mensajes" width="45px">
                        </a>
                        <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/Main.png" alt="porfile" width="40px">
                            <div id="men" class="dropdown-menu dropdown-menu-right">
                            <spam class="dropdown-item">
                                <img id="imag" src="../img/porfile.jpeg" alt="" width="110px"><br>
                                <label><?php print_r($_SESSION['nombre']);?></label>&nbsp;<label><?php print_r($_SESSION['apellidos']);?></label>
                            </spam>
                            <a href="En_construccion.php"><button class="dropdown-item" type="button">Editar Perfil</button></a>
                            <a href="En_construccion.php"><button class="dropdown-item" type="button">Agenda</button></a>
                            <a href="../controlador/control_logout.php?destroy"><button class="dropdown-item" type="button">Cerrar Sesion</button></a>
                        </div>
                        </a>
                    </li>
                </nav>
            </div>
        </div>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <ul class="list-unstyled components" id="barra">
                    <li id="li1">
                        <a class="nav-link" href="inicio_entrenador.php">
                            <p id="texma"><img src="../img/atras.png" alt="gestion_ficha" width="35px">&nbsp; &nbsp; &nbsp; &nbsp;Inicio</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="En_construccion.php">
                            <p id="texma"><img src="../img/bioquimica.png" alt="gestion_ficha" width="35px">&nbsp;Caracterizacion</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="Bateria de test.php">
                            <p id="texma"><img src="../img/entrenamiento.png" alt="gestion_usuario" width="35px">&nbsp;Bateria de Test</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="En_construccion.php">
                            <p id="texma"><img src="../img/Agenda.png" width="35px">&nbsp;Agenda</p>
                        </a>
                    </li>
                    <li>
                        <a  class="nav-link" href="En_construccion.php">
                            <p id="texma"><img src="../img/estadistica.png" alt="estadisticas" width="35px">&nbsp;Estadisticas</p>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content">
                <button type="button" id="sidebarCollapse" class="btn colo1">
                    <img src="../img/vista.png" alt="ver" width="50px">
                </button><br><br>

                <!--contenido de la pagina-->

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
        

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        <!--SRIPT PARA CERRAR-->
        <script type="text/javascript">
            document.getElementById("cerrar").onclick = function () {
            location.href = "Bateria de test.php";
            };
        </script>
    </body>

</html>