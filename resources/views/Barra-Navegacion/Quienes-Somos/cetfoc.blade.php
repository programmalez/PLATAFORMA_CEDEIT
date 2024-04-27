<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    body {

       display: flex;
       flex-direction: column;
       min-height: 100vh;
       font-family: sans-serif;
       }
       .carousel-inner img {
        max-height: 550px; /* Ajusta este valor según tus necesidades */
        width: 50px; /* Esto mantendrá la proporción de la imagen */
    }
   .footer{
   background-color:rgb(13, 62, 187);
   padding: 0.3em 0;
   display: flex;
   margin-top: auto;
   align-items: center;
   background-size: cover;
   }
   .container__footer{
       display: flex;
       flex-wrap: wrap;
       justify-content: space-between;
       max-width: 1200px;
       margin: auto;
       margin-top: 0px;

   }
   .box__footer{
       display: flex;
       flex-direction: column;
       padding: 26px;
       color: #ffffff;
       line-height: 0.8;
   }
   .box__footer h2{
       margin-bottom: 20px;
       color: #ffffff;
       font-weight: 700;
       font-size: 24px;
   }
   .box__footer a{
       margin-top: 10px;
       color: #ffffff;
       font-weight: 600;
       text-decoration: none;
   }
   .box__footer a:hover{
       opacity: 0.8;
       text-decoration: none;
   }
   .box__footer p{
       margin-top: 10px;
       color: #ffffff;
       line-height: 0.2;
       font-weight: 600;
   }
   .box__footer a .fab{
       font-size: 20px;
   }
   .box__footer img{
       width: 200px;
       margin-left: 70px;


   }
   /* Barra navegacion*/
   nav {
       background-color:  rgb(13, 62, 187);
       overflow: auto;
       max-width: 1100px;
       border-radius: 8px;
       margin: auto;
       font-family: Helvetica;
       font-size: 14px;
       padding: 5px;
       z-index: 1000;
   }
   #carouselExampleSlidesOnly {
       margin-top: -70px; /* Ajusta la cantidad que desees para que el carru
       z-index: 500; /* Z-index más bajo para el carrusel */
     }

   nav ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
       overflow: hidden;
   }

   nav li {
       margin-right: 5px;
   }

   nav li a:hover {
       background-color:  rgb(13, 62, 187);
       color: black;
   }

   nav form {
       display: flex;
       align-items: center;
   }

   nav input[type="text"] {
       padding: 10px;
       border: 1px solid #ccc;
       border-radius: 4px;
   }

   nav button {
       background-color: rgb(13, 62, 187);
       color: white;
       border: none;
       padding: 14px 15px;
       border-radius: 4px;
       cursor: pointer;
   }

   button:hover {
       background-color: rgb(13, 62, 187);
   }

   /* Ajusta los estilos del icono según sea necesario */
   button i {
       margin-right: 5px;

   }

   .menu-horizontal{
       list-style: none;
       display: flex;
       justify-content: normal;

   }
   .menu-horizontal > li > a{
       display: block;
       padding: 15px 20px;
       color: white;
       text-decoration: none;
   }
   .menu-horizontal > li:hover{
       background-color: rgb(13, 62, 187);
   }
   .menu-vertical{
       position: absolute;
       display: none;
       list-style: none;
       width: 212px;
       background-color:  rgb(13, 62, 187);
   }
   .menu-horizontal li:hover .menu-vertical{
       display: block;

   }
   .menu-vertical li:hover{
       text-align: left;
       background-color: rgb(13, 62, 187);
   }

   .menu-vertical li a{
       display: block;
       color: white;
       text-decoration: none;
       padding: 5px;
   }

   /* Estilos CEFOT*/
   .titulo{
   padding: 50px;
   background-color:rgb(56, 98, 205);
   font-family: 'Open Sans', sans-serif;
   font-size: 42px;
   align-self: center;
   text-align: center;
   }
   section {
   padding: 10px; /* Relleno dentro de todas las secciones */
   border: 1px solid #ffffff; /* Borde para todas las secciones */
   columns: 2;
   }
   /*Icono WhatsApp*/
   .btn-wsp{
   position: fixed;
   width: 55px;
   height: 55px;
   line-height: 55px;
   bottom: 300px;
   right: 30px;
   background: rgb(77, 194, 71);
   color: #ffffff;
   border-radius: 50px;
   text-align: center;
   font-size: 30px;
   box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
   z-index: 100;
   }
   .btn-wsp:hover{
   text-decoration: none;
   color:#0df053;
   background: #ffffff;
   }
   /*Estilos para el Modulo de Noticias*/
   .post-list{
   display: flex;
   min-height: 20vh;
   margin-bottom: 60px;
   margin-left: 660px;
    }
   .content{
   display: grid;
   grid-template-columns: repeat(1, 1fr);
   grid-gap: 10px;
   max-width: 230px;
   margin: auto;
   }
   .content h3{
       text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
       font-style: italic; /* Cursiva */
   }

   .post-img-3{
   width: 100%;
   height: 200px;
   background-size: cover;
   background-position: center;
   transition: .2s;
   }
   .post{
   box-shadow: 0 1px 6px 1px rgba(0, 0, 0, .1);
   overflow: hidden;
   transition: .2s;
   width: 140%; /** Ajusta el ancho según sea necesario */
   height: 270px;
   }
   .post:hover{
   transform: translateY(-4px);
   box-shadow: 0 1px 14px 2px rgba(0, 0, 0, .15);
   }
   .post-header{
   width: 100%;
   height: 130px;
   overflow: hidden;
   cursor: pointer;
   }
   .post:hover .post-img-3{
   transform: scale(1.1);
   }
   .post-body{
   padding: 0px;
   text-align: center;
   background-position: center;
   }
   .post-body span{
   display: inline-block;
   color: #636363;
   margin-bottom: 5%;

   }
   .post-body h2{
        font-family: 'Noto Sans', sans-serif;
        margin-bottom: 5px;
        font-size: 15px;
        color: #000000;
        width: 100%;
        text-align: justify;
        padding: 8px;
   }
   .post-body p{
   line-height: 1.5;
   margin-bottom: 20px;
   text-align: left;
   overflow: hidden;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* Ajusta el número de líneas según tus necesidade
   -webkit-box-orient: vertical;
   line-height: 1.5; /* Ajusta según el espacio entre líneas deseado */

   }
   .post-body p.id{
   background-color: #920505;
   border-radius: 50px;
   color: #ffffff;
   display: inline-block;
   padding: 7px;
   margin-right: 10px;
   font-size: 0.75rem;

   }
   .post-body .post-link{
   display: block;
   padding: 0px;
   color: #235ac0;
   width: 30%;
   margin: auto;

   }
   @media(max-width: 840px){
   .content{
       grid-template-columns: repeat(2, 1fr);
       margin-left: auto;
   }
   }
   @media(max-width: 600px){
   .content{
       grid-template-columns: repeat(1, 1fr);
   }
   }
   /* Convenios*/
   body {
       font-family: 'Roboto', sans-serif;
       margin: 10;
   }

   .convenios {
       display: flex;
       flex-direction: column;
       text-align: justify;
       padding: 20px;
       font-style: italic;
       text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
   }

   .content1 {
       display: grid;
       grid-template-columns: 1fr;
       grid-gap: 20px;
       max-width: 800px;
       margin: auto;
       width: 68%;/*Ancho*/
       margin-left: 15px;
       margin-top: -1009px;
   }

   .convenio {
       box-shadow: 0 1px 6px 1px rgba(0, 0, 0, .1);
       overflow: hidden;
       transition: .2s;

   }

   .convenio:hover {
       transform: translateY(-4px);

       box-shadow: 0 1px 14px 2px rgba(228, 188, 12, 0.75);
   }

   .convenio-header {
       width: 100%;
       height:  285px; /*Alto*/
       overflow: hidden;
       cursor: pointer;

   }

   .convenio:hover .convenio-img {
       transform: scale(1.1);
   }

   .convenio-img {
       width: 100%;
       height: 100%;
       background-size: cover;
       background-position: center;
       transition: .2s;
   }

   .convenio-body {
       padding: 15px;
       text-align: center;
   }

   .convenio-body  {
       margin-bottom: 10px;
       font-size: 18px;
       color: #070303;
       font-weight: bold;

   }

   .convenio-link {
       display: inline-block;
       text-decoration: none;
       padding: 12px 24px;
       background: #1623d3;
       color: #fff;
       border-radius: 50px;
       box-shadow: 1px 2px 6px 1px rgba(0, 0, 0, .1);
       transition: .2s;
   }

   .convenio-link:hover {
       background: #3641d2;
       box-shadow: 1px 2px 6px 1px rgba(0, 0, 0, .2);
       transform: translateY(-2px);
   }
   /*Programas*/
   #seccion9 {
   background-color: #ffffff;
   color: #333;
   padding: 0px;
   columns: 1;
   align-self: center;
   text-align: center;
   }

   /* Estilos personalizados para la imagen */
   .card-img-custom {
       max-width: 100%;
       height: auto;
     }

</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...tu-integridad-aqui..." crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/whatsapp/css/fontello.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS de Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
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
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion2">Misión</a></li>
                    <li><a href="{{ route('conocenos_cetfoc') }}#seccion3">Visión</a></li>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="{{ asset('assets/cetfoc.png') }}" class="d-block w-100" alt="Primera Imagen">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/cetfoc.png') }}" class="d-block w-100" alt="Segunda Imagen">
          </div>
          <div class="carousel-item active">
            <img src="{{ asset('assets/cetfoc.png') }}" class="d-block w-100" alt="Tercera Imagen">
          </div>
        </div>
    </div>
    <section class="post-list">
        <div class="content">
            <h3>Noticias</h3>
            <?php
                $noticias = \App\Models\NoticiascetfocModel::select('id', 'nombre', 'imagen', 'fecha_publicacion',
                'hora_publicacion', 'texto', 'autor', 'enlace')->take(3)->get();
            ?>
            @foreach($noticias as $noticia)
                <article class="post">
                    <div class="post-header">
                        <div class="post-img-3"><img src="{{ asset('Imagenes/' . $noticia->imagen) }}" class="card-img-top" alt="Imagen"style="width: 350px; height: 250px; "></div>
                    </div>
                    <div class="post-body">
                        <span>{{ $noticia->fecha_publicacion}} {{ $noticia->hora_publicacion }}</span>
                        <h2>{{ $noticia->nombre }}</h2>
                        <a href="{{ route('noticet+', ['id' => $noticia->id]) }}" class="post-link">Ver Más</a>
                    </div>
                </article>
            @endforeach
            <a href="{{ route('noticet') }}" class="post-link" style="color:   rgb(13, 62, 187);"><i class="fas fa-arrow-right" style="color:   rgb(13, 62, 187);"></i>Ver Más Noticias</a>
        </div>
    </section>
    <div class="convenios">
        <div class="content1">
            <h2>Convenios</h2>
            <article class="convenio" >
                <div class="convenio-header">
                    <img src="{{ asset('assets/Magdalena.jpg') }}" class="card-img-top" alt="Imagen de la noticia" style="width: 750px; height: 290px; ">
                </div>
                <div class="convenio-body">
                    <h2>Convenio con la Universidad del Magdalena</h2>
                    <a href="#" class="convenio-link">Oferta Academica</a>
                </div>
            </article>
            <article class="convenio">
                <div class="convenio-header">
                    <img src="{{ asset('assets/logoIBERO.png') }}" class="card-img-top" alt="Imagen de la noticia" style="width: 750px; height: 290px; ">
                </div>
                <div class="convenio-body">
                    <h2>Convenio con la Universidad Iberoamericana</h2>
                    <a href="#" class="convenio-link">Oferta Academica</a>
                </div>
            </article>
        </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=3246608071" class="btn-wsp" target="_blank"><i class="icon-whatsapp"></i></a>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="{{ asset('assets/Magdalena.jpg') }}" width="124" height="75" alt=""></a></li>
        </ul>
    </div>
    <footer class="footer">
        <div class="box__footer">
            <img src="{{ asset('assets/logoCetfoc.jpg') }}" alt="">
        </div>
        <div class="container__footer">
            <div class="box__footer" style="margin-left: 5px;">
                <h2>Ubicación</h2>
                <p>Cra 10A No. 8-52 Popayán, Colombia</p>
                <p>Cel: 3184346680 - 3046047076</p>
                <p>Whatsapp: 3246608071</p>
                <p>Correo:  cetfot@gmail.com</p>
                <p>LICENCIA DE FUNCIONAMIENTO: 20231700075094</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cetfoc') }}#seccion1">Acerca de</a>
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
<script>//Para mover las imagenes cada 6 segundos pagina Inicio
    document.addEventListener('DOMContentLoaded', function () {
      var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleSlidesOnly'), {
        interval: 6000, // Intervalo en milisegundos (en este caso, 3 segundos)
        pause: 'hover', // Pausar el carrusel al pasar el mouse sobre él
      });
    });
  </script>
</html>
