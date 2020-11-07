@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <ul class="list-unstyled components" id="barra"> 
                <li>
                    <a class="nav-link" href="En_construccion.php">
                        <p id="texma"><img src="../img/bioquimica.png" alt="gestion_ficha" width="35px">Caracterizacion</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="Bateria de test.php">
                        <p id="texma"><img src="../img/entrenamiento.png" alt="gestion_usuario" width="35px" >Bateria de Test</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="En_construccion.php">
                        <p id="texma"><img src="../img/Agenda.png" width="35px">    Agenda</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="En_construccion.php">
                        <p id="texma"><img src="../img/estadistica.png" alt="estadisticas" width="35px">Estadisticas</p>
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
@endsection