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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Logo -->
    <link rel="icon" type="image/png" href="{{ asset('../img/logo.png')}}">
</head>
<body>
    <div class="container-fluid">
        @guest
        @else
            <!--Esta es la principal etiqueta que contiene la pagina-->
            <div id="nav" class="row">
                <!--Esta etiqueta contiene el contenido de toda la barra de navegacion-->
                <nav id="pru" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <!--Define el responsive de la barra de navegacion-->
                    <a id="nabo" class="navbar" href="{{ url('/') }}"><img src="img/logo.png" width="95px"></a>
                </nav>
                <nav class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <li class="nav dropdown justify-content-end">
                        <!--Esta etiqueta contiene el icono de inicio de sesion-->
                        <a class="nav-link dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!--Esta determina el boton-->
                            <img id="inicio" src="img/porfile.png" alt="porfile" width="80px">
                            <!--Esta etiqueta define la imagen de inicio de sesion-->
                        </a>
                        
                        <!-- Authentication Links -->
                        <!--
                        @ guest
                            <div id="fon" class="dropdown-menu dropdown-menu-right">
                                <div class="top-right links">
                                    <a class="dropdown-item btn" type="button" href="{ { route('login') }}">{ { __('Iniciar Sesion') }}</a>
                                    @ if (Route::has('register'))
                                        <a class="dropdown-item btn" type="button" href="{ { route('register') }}">{ { __('Registrate') }}</a>
                                    @ endif
                                <div>
                            </div>
                        @ else
                        -->
                        <div id="fon" class="dropdown-menu dropdown-menu-right">
                            <div class="nav-item dropdown">
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
                    </li>
                </nav>
            </div>
        @endguest

        <div class="row">
            @yield('content')
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
