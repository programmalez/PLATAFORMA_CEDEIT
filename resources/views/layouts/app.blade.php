<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Librerias externas -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-...tu-integridad-aqui..." crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/whatsapp/css/fontello.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS de Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="home">Inicio</a></li>
            <li>
                <a href="conocenos_cedeit">Cedeit</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion1">Quienes somos</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion2">Misión</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion3">Visión</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion4">Organización Estructural</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion5">Principios Institucionales</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion6">Propuesta Interinstitucional</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion7">Sedes</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion8">Alcances del Convenio</a></li>
                </ul>
            </li>
            <li><a href="{{ route('CETFOC') }}">Cetfoc</a></li>
            <li><a href="{{ route('IMPACTO') }}">Impacto</a></li>
            <li>
                <a href="Rcedeit">Inscripciones</a>
                <ul class="menu-vertical">
                    <li><a href="Rcedeit">Procesos y requisitos para Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('pregrado') }}">Programas</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('formacion_continua') }}">Formación Continua</a></li>
                    <li><a href="{{ route('pregrado') }}">U. Magdalena</a></li>
                    <li><a href="{{ route('postgrado') }}">U. Iberoamericana</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('Convenios') }}">Convenios</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('Convenios') }}#seccion1">Universidad Ibeoamericana</a></li>
                    <li><a href="{{ route('Convenios') }}#seccion2">Universidad del Magdalena</a></li>
                </ul>
            </li>
            <form action="{{ route('noticias.search') }}" method="GET">
                <input type="text" name="q" placeholder="Buscar...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            @endif
        </ul>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('assets/cedeitcorrusel.png') }}" class="d-block w-100" alt="Primera Imagen" style="width: 1080px; height: 900px;">
                <div class="carousel-caption text-start">
                    <h5 class="display-3 font-weight-bold">Con CEDEIT<br> transforma tu<br> futuro</h5>
                    <p>¡Matricúlate ahora!</p>
                    <a href="{{ route('Rcedeit') }}" class="btn btn-primary btn-sm">Inscripción</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/cedeitcorrusel.png') }}" class="d-block w-100" alt="Segunda Imagen" style="width: 1080px; height: 900px;">
                <div class="carousel-caption text-start">
                    <h5 class="display-3 font-weight-bold">Con CEDEIT<br> transforma <br>tu futuro</h5>
                    <p>¡Matricúlate ahora!</p>
                    <a href="{{ route('Rcedeit') }}" class="btn btn-primary btn-sm">Inscripción</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('assets/cedeitcorrusel.png') }}" class="d-block w-100" alt="Tercera Imagen" style="width: 1080px; height: 900px;">
                <div class="carousel-caption text-start">
                    <h5 class="display-3 font-weight-bold">Con CEDEIT<br>transforma<br>
                         tu futuro</h5>
                    <p>¡Matricúlate ahora!</p>
                    <a href="{{ route('Rcedeit') }}" class="btn btn-primary btn-sm">Inscripción</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-cover">
        <section class="post-list">
            <div class="content">
                <h3>Noticias</h3>
                <?php
                $noticias = \App\Models\NoticiascedeitModel::select('id', 'nombre', 'imagen', 'fecha_publicacion', 'hora_publicacion', 'texto', 'autor', 'enlace')->take(3)->get();
                ?>
                @foreach ($noticias as $noticia)
                    <article class="post">
                        <div class="post-header">
                            <div class="post-img-1">
                                <img src="{{ asset('Imagenes/' . $noticia->imagen) }}" class="card-img-top"
                                    alt="Imagen" style="width: 325px; height: 130px; ">
                            </div>
                        </div>
                        <div class="post-body">
                            <span>{{ $noticia->fecha_publicacion }} {{ $noticia->hora_publicacion }}</span>
                            <h2>{{ $noticia->nombre }}</h2>
                            <a href="{{ route('noticedeit+', ['id' => $noticia->id]) }}" class="post-link">Ver Más</a>
                        </div>
                    </article>
                @endforeach
                <a href="{{ route('noticedeit') }}" class="post-link" style="color:   rgb(13, 62, 187);"><i
                        class="fas fa-arrow-right" style="color:   rgb(13, 62, 187);"></i>Ver Más Noticias</a>
            </div>
        </section>
    </div>
    <div class="convenios">
        <div class="content1">
            <h2>Convenios</h2>
            <article class="convenio">
                <div class="convenio-header">
                    <img src="{{ asset('assets/Magdalena.jpg') }}" class="card-img-top" alt="Imagen de la noticia"
                        style="width: 750px; height: 290px; ">
                </div>
                <div class="convenio-body">
                    <h2>Convenio con la Universidad del Magdalena</h2>
                    <a href="pregrado" class="convenio-link">Oferta Academica</a>
                </div>
            </article>
            <article class="convenio">
                <div class="convenio-header">
                    <img src="{{ asset('assets/logoIBERO.png') }}" class="card-img-top" alt="Imagen de la noticia"
                        style="width: 750px; height: 290px; ">
                </div>
                <div class="convenio-body">
                    <h2>Convenio con la Universidad Iberoamericana</h2>
                    <a href="postgrado" class="convenio-link">Oferta Academica</a>
                </div>
            </article>
        </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=3246608071" class="btn-wsp" target="_blank"><i
            class="icon-whatsapp"></i></a>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co"
                    title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75"
                        alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co"
                    title="Magdalena"><img src="{{ asset('assets/Magdalena.jpg') }}" width="124" height="75"
                        alt=""></a></li>
        </ul>
    </div>
    <footer class="footer">
        <div class="box__footer">
            <img src="{{ asset('assets/CEDEIT BLANCO.png') }}" alt="">
        </div>
        <div class="container__footer">
            <div class="box__footer" style="margin-left: 5px;">
                <h2>Ubicación</h2>
                <p>Cra 10A No. 8-52 Popayán, Colombia</p>
                <p>Cel: 3184346680 - 3046047076</p>
                <p>Whatsapp: 3246608071</p>
                <p>Correo: impacto.int@gmail.com</p>
                <p>Licencia de funcionamiento: 20231700075084</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cedeit') }}">Quienes Somos</a>
                <a href="Rcedeit">Proceso Matricula</a>
                <a href="formacion_continua">Programas</a>
                <a href="{{ route('conocenos_cedeit') }}#seccion7">Sedes</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.facebook.com/profile.php?id=100079197482553&mibextid=eHce3h"><i< class="bi bi-facebook"></i> Facebook</a>
                <a href="https://api.whatsapp.com/send?phone=3246608071"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                <a href=""><i class="bi bi-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>
</body>
<script>
    //Para mover las imagenes cada 3 segundos pagina Inicio
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleDark'), {
            interval: 6000, // Intervalo en milisegundos (en este caso, 3 segundos)
            pause: 'hover', // Pausar el carrusel al pasar el mouse sobre él
        });
    });
</script>

</html>
