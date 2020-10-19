<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inicio</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/inicio_roles.css">
    <link rel="icon" type="image/png" href="../img/logo.png">
</head>

<body>
    <div class="container-fluid">
        <div id="nav" class="row">
            <nav class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <a href="inicio_depor.php" id="home"><img id="logofit" src="../img/logo.png"></a>
            </nav>
            <nav class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <li class="nav dropdown justify-content-end">
                    <a href="De_construccion.php" class="nav-link dropdown" role="button">
                        <img src="../img/men.png" alt="mensajes" width="45px">
                    </a>
                    <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../img/Main.png" alt="porfile" width="40px">
                        <div id="men" class="dropdown-menu dropdown-menu-right">
                            <spam class="dropdown-item">
                                <img id="imag" src="../img/porfile.jpeg" alt="" width="110px"><br>
                                <label><?php print_r($_SESSION['nombre']);?></label>&nbsp;<label><?php print_r($_SESSION['apellidos']);?></label>
                            </spam>
                            <a href="Editar_perfil.php"><button class="dropdown-item" type="button">Editar Perfil</button></a>
                            <a href="De_construccion.php"><button class="dropdown-item" type="button">Agenda</button></a>
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
            <ul class="list-unstyled components">
                <li>
                    <a class="nav-link" href="Anamnesis_1.php" id="barra">
                        <p id="texma"><img src="../img/impreso-1.png" alt="anamnesis" width="35px">&nbsp;Anamnesis</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="De_construccion.php">
                        <p id="texma"><img src="../img/h.png" alt="estadisticas" width="35px">&nbsp;Estadisticas</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="De_construccion.php">
                        <p id="texma"><img src="../img/Agenda.png" alt="agenda" width="35px">&nbsp;Agenda</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <button type="button" id="sidebarCollapse" class="btn colo1">
                <img src="../img/vista.png" alt="ver" width="50px">
            </button>


            <!--contenido de la pagina-->


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
</body>

</html>