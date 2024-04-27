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
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...tu-integridad-aqui..." crossorigin="anonymous" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estiloscetfoc.css') }}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="home"><i class="fa fa-home"></i></a></li>
            <li><a href="Cetfoc">Inicio</a></li>
            <li>
                <a href="conocenos_cetfoc">Conocenos</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion1">Filosofia Institucional</a></li>
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion2">Mision</a></li>
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion3">Vision</a></li>
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion4">Principios Institucionales</a></li>
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion5">Simbolos Institucionales</a></li>
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion6">Sedes</a></li>
                </ul>
            </li>
            <li>
                <a href="Rcetfoc">Admisiones</a>
                <ul class="menu-vertical">
                    <li><a href="Rcetfoc">Procesos y requisitos para Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('tecnicolaboral_cetfoc') }}">Programas</a>
                <ul class="menu-vertical">
                    <li><a href="{{route('tecnicolaboral_cetfoc') }}">Tecnico Laboral por competencias</a></li>
                </ul>
            </li>
            <form action="{{ url('/buscar') }}" method="GET">
                <input type="text" name="q" placeholder="Buscar...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </ul>
    </nav>
    <section id="#seccion1">
        <h2 style="color: rgb(13, 62, 187); font-size: 24px; text-align: left; text-align: center;">CENTRO DE ESTUDIOS TÉCNICOS Y FORMACIÓN CONTINUA – CETFOC</h2>
    </section>
    <section class="post-list">
        <div class="content">
            <?php
            $procetfoc = \App\Models\ProcetModel::select('id', 'curso', 'licencia', 'perfil',
                'cuatri', 'imagen', 'documento', 'titulo' , 'modalidad' , 'texto')->take(10)->get();
            ?>
            @foreach($procetfoc as $procet)
                <article class="post">
                    <div class="post-header">
                        <div class="post-img-1"><img src="{{ asset('Imagenes/' . $procet->imagen) }}"  class="card-img-top img-fluid"  alt="Imagen" style="width: 330px; height: 200px;"></div>
                    </div>
                    <div class="post-body">
                        <span>{{ $procet->titulo }}</span>|
                        <h2>{{ $procet->curso }}</h2>
                        <p class="descripcion" style="height: 144px;"> {{ $procet->texto }} </p>
                        <p class="id">{{ $procet->modalidad }}</p><p class="id">{{ $procet->licencia }}</p><p class="id">{{ $procet->cuatri }} Cuatrimestres</p>
                        <a href="{{route('procet', ['id' => $procet->id]) }}" class="post-link">Info...</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="assets/Magdalena.jpg" width="124" height="75" alt=""></a></li>
        </ul>
    </div>
    <footer class="footer">
       <div class="box__footer">
            <img src="assets/logoCetfoc.jpg" alt="">
       </div>
       <div class="container__footer">
            <div class="box__footer" style="margin-left: 5px;">
                <h2>Ubicación</h2>
                <p>Cra 10A No. 8-52 Popayán, Colombia</p>
                <p>Cel: 3184346680 - 3046047076</p>
                <p>Whatsapp: 3246608071</p>
                <p>Correo:  cetfoc@gmail.com</p>
                <p>Licencia de funcionamiento: 20231700075084</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cetfoc') }}#seccion1">Quienes Somos</a>
                <a href="Rcetfoc">Proceso Matricula</a>
                <a href="{{ route('tecnicolaboral_cetfoc') }}">Programas</a>
                <a href="{{ route('conocenos_cetfoc') }}#seccion6">Sedes</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.facebook.com/profile.php?id=100079197482553&mibextid=eHce3h"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="https://api.whatsapp.com/send?phone=3246608071"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                <a href=""><i class="bi bi-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>
