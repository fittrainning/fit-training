<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
    <script src="{{ asset('js/style.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

    <!-- Logo -->
    <link rel="icon" type="image/png" href="{{ asset('../img/logo.png')}}">
</head>
<body>
    <div class="container-fluid">
        @guest
        <main class="py-4">
            @yield('content')
        </main>
        @else
        <!--Esta es la principal etiqueta que contiene la pagina-->
        <div id="nav" class="row">
            <!--Esta etiqueta contiene el contenido de toda la barra de navegacion-->
            <nav id="pru" class="col-6 col-sm-8 col-md-8 col-lg-10 col-xl-10">
                <!--Define el responsive de la barra de navegacion-->
                <a class="navbar" href="{{ url('/') }}"><img src="img/logo.png" width="55px"></a>
            </nav>
            <nav class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                <a class="nav justify-content-end" href="{{ route('mensajeria') }}">
                    <img id="mensa" src="{{ asset('img/men.png') }}" alt="" width="50px">
                </a>
            </nav>
            <nav class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
                <li class="nav dropdown justify-content-end">
                    <!--Esta etiqueta contiene el icono de inicio de sesion-->
                    <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!--Esta determina el boton-->
                        <img id="inicio" src="{{ asset('img/Main.png') }}" alt="porfile" width="50px">
                        <!--Esta etiqueta define la imagen de inicio de sesion-->
                    </a>
                    <!-- Authentication Links 
                    @ guest
                        <div id="fon" class="dropdown-menu dropdown-menu-right">
                            <div class="top-right links">
                                <a class="dropdown-item btn" type="button" href="{ { route('login') }}">{ { __('Iniciar Sesion') }}</a>
                                @ if (Route::has('register'))
                                    <a class="dropdown-item btn" type="button" href="{ { route('register') }}">{ { __('Registrate') }}</a>
                                @ endif
                            <div>
                        </div>
                    @ else-->
                    <div id="fon" class="dropdown-menu dropdown-menu-right">
                        <div class="nav-item dropdown">
                            <a class="dropdown-item">
                                <img id="porfile" src="{{ asset('img/porfile.png') }}"><br>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <a class="dropdown-item" href="{{ route('editar_perfil') }}">
                                {{ __('Editar Perfil') }}
                            </a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!--@ endguest-->
                </li>
            </nav>
        </div>

        <div class="row">
            <div class="wrapper">
                <!-- Sidebar  -->
                <nav id="sidebar">
                    <ul class="list-unstyled components" id="barra">
                        <li>
                            <a class="nav-link" href="{{ route('caracterizacion') }}">
                                <p id="texma"><img src="{{ asset('../img/bioquimica.png') }}" alt="gestion_ficha" width="35px">&nbsp;Caracterizacion</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('bateria') }}">
                                <p id="texma"><img src="../img/entrenamiento.png" alt="gestion_usuario" width="35px" >&nbsp;Bateria de Test</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/construccion') }}">
                                <p id="texma"><img src="../img/Agenda.png" width="35px">&nbsp;Agenda</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('estadisticas') }}">
                                <p id="texma"><img src="../img/estadistica.png" alt="estadisticas" width="35px">&nbsp;Estadisticas</p>
                            </a>
                        
                        </li>
                    </ul>
                </nav>
        
                <!-- Page Content  -->
                <div id="content">
                    <button type="button" id="sidebarCollapse" class="btn colo1">
                        <img src="../img/vista.png" alt="ver" width="50px">
                    </button>
        
                    <main class="py-4">
                        @yield('content')
                    </main>
        
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    @endguest
</body>
</html>
