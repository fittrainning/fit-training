<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="img/logo.png">
        <title>Fit Training</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container-fluid">
            <!--Esta es la principal etiqueta que contiene la pagina-->
            <div id="nav" class="row">
                <!--Esta etiqueta contiene el contenido de toda la barra de navegacion-->
                <nav id="pru" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <!--Define el responsive de la barra de navegacion-->
                    <a id="nabo" class="navbar" href="{{ url('/') }}"><img src="img/logo.png" width="95px"></a>
                    <!--Esta etiqueta muestra el logo de la pagina-->
                    <a id="nabot" class="navbar" href="galeria">GALERIA</a>
                    <a id="nabot" class="navbar" href="">CONTACTENOS</a>
                </nav>
                <nav class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <!-- Esta etiqueta define el responsive-->
                    <li class="nav dropdown justify-content-end">
                        <!--Esta etiqueta contiene el icono de inicio de sesion-->
                        <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!--Esta determina el boton-->
                            <img id="inicio" src="img/porfile.png" alt="porfile" width="80px">
                            <!--Esta etiqueta define la imagen de inicio de sesion-->
                        </a>
                        <div id="fon" class="dropdown-menu dropdown-menu-right">
                            <!--Esta etiqueta muestra la lista desplegable, luego de hacer clik en la imagen-->
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                        <a href="vista/login.php" class="dropdown-item btn" type="button"></a>
                                            <a href="{{ url('/inicio') }}">Inicio</a>
                                        @else
                                            <a class="dropdown-item btn" type="button" href="{{ route('login') }}">Iniciar Sesion</a>
                                        @endauth
                                    </div>
                                @endif
                            <!--Redireccionamiento a la vista de inicio de sesion-->
                        </div>
                    </li>
                </nav>
            </div>
            <div class="row">
                <!--Esta etiqueta contiene una breve descripcion de la pagina-->
                <div id="texto" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="hero">
                        <!--Contiene pequeño texto y un boton -->
                        <h1>FIT-TRAINNING</h1><br>
                        <!-- Este es el nombre de la pagina -->
                        <p>El entrenamiento es un concepto que reúne todas las medidas del proceso para aumentar el rendimiento deportivo. (Grosser, Starischka y Zimmermann, 1983)</p>
                        <!-- Esta es una breve descripcion de la pagina -->
                        @if (Route::has('register'))
                        <a type="button" href="{{ route('register') }}" id="reg" class="btn">
                            <!-- Aqui hay un boton que redirije a la pagina de registro en la pagina -->
                            REGISTRO
                        @endif
                        </a>
                    </div>
                </div>
                <br>
            </div>
            <div id="caja" class="row">
                <!-- En esta etiqueta se encuentra el carrusel -->
                <div class="content-all">
                    <div class="content-carrousel">
                        <!-- Aqui se encuentran las imagenes que estan en el carrusel -->
                        <figure class="shadow"><img src="img/img1.jpeg"></figure>
                        <figure class="shadow"><img src="img/img2.jpg"></figure>
                        <figure class="shadow"><img src="img/img3.jpeg"></figure>
                        <figure class="shadow"><img src="img/img4.jpeg"></figure>
                        <figure class="shadow"><img src="img/img5.jpg"></figure>
                        <figure class="shadow"><img src="img/img6.jpeg"></figure>
                        <figure class="shadow"><img src="img/img7.jpg"></figure>
                        <figure class="shadow"><img src="img/img8.jpg"></figure>
                        <figure class="shadow"><img src="img/img9.jpeg"></figure>
                        <figure class="shadow"><img src="img/img10.jpeg"></figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Contiene los modales de los  cuatro principales deportes-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Deportes</h2>
                </div>
                <div id="cuadro" class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div id="momo">
                        <!--Contiene el nombre y la imagen del primer deporte -->
                        <h3>Futbol</h3><br>
                        <!--Define el nombre del deporte -->
                        <button id="bot" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><!--Determina el boton de este modal -->
                                <img src="img/depo1.png"  width="100%"><!--Define la imagen del deporte-->
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div id="moda" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <p id="letra">Caracterizacion de Futbol</p>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--Esta etiqueta contiene la descripcion principal de la caracterizacion del deporte-->
                                        <p id="letra">
                                            Es un deporte a cíclico, de características motrices intermitentes, de habilidades abiertas; polivalentes. Su complejidad se debe al estricto reglamento, que obliga al jugador a poseer un alto grado de habilidad especial. El futbol es una confrontación
                                            directa entre dos equipos (cooperación y oposición), con un objetivo determinado, esto es, disputar el balón para convertir un gol o evitar que lo conviertan.
                                        </p>
                                        <br>
                                        <br>
                                        <img id="gato" src="img/img3.jpeg" width="200px"><br><br>
                                        <!--Estq etiqueta contiene la imagen correspondiente a dicho deporte-->
                                        <p id="letra">Para mas información descargue el <br>documento dando <a href="" download="Ejemplo">Click aquí</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Baloncesto -->

                <div id="cuadro" class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div id="momo">
                        <h3>Baloncesto</h3><br>
                        <button id="bot" type="button" class="btn btn-primary" data-toggle="modal" data-target="#baloncesto">
                                <img src="img/depo2.png"  width="100%">
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="baloncesto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div id="moda" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <p id="letra">Caracterizacion de Baloncesto</p>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="letra">
                                            ....
                                        </p>
                                        <br>
                                        <br>
                                        <img id="gato" src="img/img1.jpeg" width="200px"><br><br>
                                        <p id="letra">Para mas información descargue el <br>documento dando <a href="" download="Ejemplo">Click aquí</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Volleibal-->

                <div id="cuadro" class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div id="momo">
                        <h3>Voleibol</h3><br>
                        <button id="bot" type="button" class="btn btn-primary" data-toggle="modal" data-target="#voleibol">
                                <img src="img/depo3.png"  width="100%">
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="voleibol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div id="moda" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <p id="letra">Caracterizacion de Voleibol</p>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="letra">
                                            ...
                                        </p>
                                        <br>
                                        <br>
                                        <img id="gato" src="img/volley.JPG" width="200px"><br><br>
                                        <p id="letra">Para mas información descargue el <br>documento dando <a href="" download="Ejemplo">Click aquí</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Atletismo-->

                <div id="cuadro" class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div id="momo">
                        <h3>Atletismo</h3><br>
                        <button id="bot" type="button" class="btn btn-primary" data-toggle="modal" data-target="#atletismo">
                                <img src="img/depo4.png"  width="100%">
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="atletismo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div id="moda" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <p id="letra">Caracterizacion de Atletismo</p>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="letra">
                                            ...
                                        </p>
                                        <br>
                                        <br>
                                        <img id="gato" src="img/atletismo.jpeg" width="200px"><br><br>
                                        <p id="letra">Para mas información descargue el <br>documento dando <a href="" download="Ejemplo">Click aquí</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>

        <!--FOOTER-->

        <footer class="footer text-center" id="copy">
            <div class="container">
                <div class="row">

                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0" id="redes">
                        <br><br>

                        <hr>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/Fit-training-102902384535844/"><i class="fab fa-fw fa-facebook-f"></i></a>&numsp;&numsp;Fit-training<br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://ftraining8.blogspot.com/"><i class="fab fa-fw fa-blogger"></i></a>&numsp;&numsp;Fit-training<br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/ftraining8/"><i class="fab fa-fw fa-instagram"></i></a>&numsp;&numsp;@ftraining8<br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/channel/UCPebol_WznVAM-SKgcLV_4A"><i class="fab fa-fw fa-youtube"></i></a>&numsp;&numsp;Fit Training<br><br>
                        <br><br>
                        <!--<h6 class="text-uppercase mb-4">Siguenos en redes sociales</h6>-->
                    </div>

                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <br>
                        <img src="img/logo.png" width="250px">
                    </div>

                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <br><br><br>
                        <img src="img/sena.png" width="150px"><br>
                        <br>
                        <h6 class="text-uppercase mb-4">Direccion</h6>

                        <h6 class="text-uppercase mb-4">Cl. 17. Mosquera, Cundinamarca</h6>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div id="cop" class="copyright py-4 text-center text-white ">
            <div class="container">
                <small>Copyright © FIT-TRAINING 2020</small>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
