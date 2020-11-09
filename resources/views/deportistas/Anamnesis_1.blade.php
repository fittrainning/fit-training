<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Anamnesis</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
            integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../css/inicio_roles.css">
        <link rel="icon" type="image/png" href="../img/logo.png">
    </head>

    <body>
        <div class="container-fluid">
            <div id="nav" class="row">
                <nav class="col-6 col-sm-6 col-md-6 col-lg-8 col-xl-8">
                    <a href="inicio_depor.php" id="home"><img src="../img/logo.png" id="logofit"></a>
                </nav>
                <nav class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <li class="nav dropdown justify-content-end">
                        <a href="Di_construccion.php" class="nav-link dropdown" role="button">
                            <img src="../img/men.png" alt="mensajes" width="55px">
                        </a>
                        <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                            <img src="../img/Main.png" alt="porfile" width="50px">
                            <div id="men" class="dropdown-menu dropdown-menu-right">
                                <spam class="dropdown-item">
                                    <img id="imag" src="../img/porfile.jpeg" alt="" width="110px"><br>
                                    <label><?php print_r($_SESSION['nombre']);?></label>&nbsp;<label><?php print_r($_SESSION['apellidos']);?></label>
                                </spam>
                                <a href="Editar_perfil.php"><button class="dropdown-item" type="button">EditarPerfil</button></a>
                                <a href="De_construccion.php"><button class="dropdown-item" type="button">Agenda</button></a>
                                <a href="../controlador/control_logout.php?destroy"><button class="dropdown-item"type="button">Cerrar Sesion</button></a>
                            </div>
                        </a>
                    </li>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Page Content  -->
            <div id="content">
                <!--contenido de la pagina-->
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
                            <a href="Anamnesis_2.php"><img id="fle" src="../img/flechas.png" alt="siguiente"
                                    width="30%"></a>
                        </div>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
        </div>



        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
        </script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
        </script>

        <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
        </script>
    </body>

</html>