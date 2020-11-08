<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>cargar ficha</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../css/inicio_roles.css">
        <link rel="stylesheet" href="../css/Bateria de test.css">
        <link rel="icon" type="image/png" href="../img/logo.png">
    </head>

    <body>
        <div class="container-fluid">
            <div id="nav" class="row">
                <nav class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <a href="inicio_entrenador.php" id="home"><img src="../img/logo.png" id="logofit"></a>
                </nav>
                <nav class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <li class="nav dropdown justify-content-end">
                        <a href="Di_construccion.php" class="nav-link dropdown" role="button">
                            <img src="../img/men.png" alt="mensajes" width="45px">
                        </a>
                        <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/Main.png" alt="porfile" width="40px">
                            <div id="men" class="dropdown-menu dropdown-menu-right">
                            <spam class="dropdown-item">
                                <img id="imag" src="../img/porfile.jpeg" alt="" width="110px"><br>
                                <label><?php print_r($_SESSION['nombre']);?></label>&nbsp;<label><?php print_r($_SESSION['apellidos']);?></label>
                            </spam>
                            <a href="Editar_perfil_director.php"><button class="dropdown-item" type="button">Editar Perfil</button></a>
                            <a href="Di_construccion.php"><button class="dropdown-item" type="button">Agenda</button></a>
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
                        <a class="nav-link" href="inicio_director.php">
                            <p id="texma"><img src="../img/atras.png" alt="gestion_ficha" width="35px">&nbsp; &nbsp; &nbsp; &nbsp;Inicio</p>
                        </a>
                    </li>
                <li>
                    <a class="nav-link" href="">
                        <p id="texma"><img src="../img/clipboard109-01.png" alt="gestion_ficha" width="35px">&nbsp;Gestion Ficha</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="cargar_usuario.php">
                        <p id="texma"><img src="../img/impreso-1.png" alt="gestion_usuario" width="35px">Gestion Usuario</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <p id="texma"><img src="../img/multitudb.png" alt="entrenadores" width="35px">&nbsp;Entrenadores</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <p id="texma"><img src="../img/h.png" alt="estadisticas" width="35px">&nbsp;Estadisticas</p>
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
            <div class="d-flex justify-content-center">
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
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                      </div>
                    </div>
                  </div>

                </div>
              
            </div>
               
               
           

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