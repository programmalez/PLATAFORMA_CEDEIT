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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.mi


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estilo.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/whatsapp/css/fontello.css') }}">

</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="#">Inicio</a></li>
            <li> 
                <a href="#">Conocenos</a>
                <ul class="menu-vertical">
                    <li><a href="#">Filosofia Institucional</a></li>
                    <li><a href="#">Mision</a></li>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Principios Institucionales</a></li>
                    <li><a href="#">Simbolos Institucionales</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Admisiones</a>
                <ul class="menu-vertical">
                    <li><a href="#">Procesos y requisitos de Admision</a></li>
                    <li><a href="#">Proceso de Matricula para Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Programas</a>
                <ul class="menu-vertical">
                    <li><a href="#">Pregrado</a></li>
                    <li><a href="#">Postgrado</a></li>
                    <li><a href="#">Tecnico Laboral por competencias</a></li>
                    <li><a href="#">Formacion Continua</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="#">Convenios</a>
                <ul class="menu-vertical">
                    <li><a href="#">Universidad Ibeoamericana</a></li>
                    <li><a href="#">Universidad del Magdalena</a></li>
                </ul>
            </li>
                <form action="{{ url('/buscar') }}" method="GET">
                    <input type="text" name="q" placeholder="Buscar...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            
        </ul>
    </nav>
    <a href="https://api.whatsapp.com/send?phone=3246608071" class="btn-wsp" target="_blank"><i class="icon-whatsapp"></i></a>
    
</body>
</html>
