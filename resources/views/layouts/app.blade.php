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
                    @guest
                        <div id="fon" class="dropdown-menu dropdown-menu-right">
                            <div class="top-right links">
                                <a class="dropdown-item btn" type="button" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                @if (Route::has('register'))
                                    <a class="dropdown-item btn" type="button" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                @endif
                            <div>
                        </div>
                    @else
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
                    @endguest
                </li>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
