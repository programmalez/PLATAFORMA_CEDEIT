<!DOCTYPE html>
<html lang="en">
<style>
    body {

           display: flex;
           flex-direction: column;
           min-height: 100vh;
           font-family: sans-serif;
           }
       /* Barra navegacion*/
       nav {
        background-image: linear-gradient(to right, #094d2c, #528b6f);
           overflow: auto;
           max-width: 1000px;
           border-radius: 8px;
           margin: auto;
           font-family: Helvetica;
           font-size: 14px;
           padding: 5px;
           z-index: 1000;
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
        background-image: linear-gradient(to right, #094d2c, #528b6f);
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
        background-image: linear-gradient(to right, #528b6f, #528b6f);
           color: white;
           border: none;
           padding: 14px 15px;
           border-radius: 4px;
           cursor: pointer;
       }

       button:hover {
        background-image: linear-gradient(to right, #528b6f, #528b6f);
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
        background-image: linear-gradient(to right, #094d2c, #528b6f);
       }
       .menu-vertical{
           position: absolute;
           display: none;
           list-style: none;
           width: 212px;
           background-image: linear-gradient(to right, #094d2c, #528b6f);
       }
       .menu-horizontal li:hover .menu-vertical{
           display: block;

       }
       .menu-vertical li:hover{
           text-align: left;
           background-image: linear-gradient(to right, #094d2c, #528b6f);
       }

       .menu-vertical li a{
           display: block;
           color: white;
           text-decoration: none;
           padding: 5px;
       }
       /* Estilos Notcias pagina*/
       body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 20;
                background-color: #f2f2f2;
            }

            .tile {
                display: flex;
                margin: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                transition: box-shadow 0.3s ease;
                height: 1253px;
                max-width: 1264px;
                padding: 20px;
                margin-left: 50px;
            }

            .tile:hover {
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            }

            .tile-img {
                flex: 1;
            }

            .img img {
                width: 900px;
                height: auto;
                object-fit: cover;
                border-radius: 20px;
            }

            .tile-body {
                flex: 2;
                padding: 20px;

            }

            .tile-caption {
                margin-bottom: 5px;
            }

            h3 {
                margin: 0;
                font-size: 23px;
                color: #c32525;
            }

            .date {
                color: #666;
                font-style: italic;
            }

            p {
                color: #333232;
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                padding: 20px;
                text-align: justify;
            }
            .tile-caption a {
                font-size: 28px; /* Ajusta el tamaño de la letra según sea necesario */
                color:  #094d2c !important;  /* Color del texto */
                font-weight: bold; /* Hace que el texto sea negrita */
                display: block; /* Para que ocupe todo el ancho disponible */
                width: 900px; /* Asegura que ocupe todo el ancho disponible */
            }
            /*Titulo noticias*/
            h1{
                display: inline-block;
                position: relative;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            }
            h1::after, h1::before{
                content: '';
                position: absolute;
                width: 160px;
                height: 3px;
                background-color: currentColor;
                top:0.6em;
            }
            h1::before{
                left: 150px ;
            }
            h1::after{
                right: 150px ;
            }
            /*Barra Lateral*/

    .sidebar {
    width: 170px; /* Ajusta el ancho de la barra lateral según sea necesario */
    background-color: #ffffff; /* Cambia el color de fondo según tus preferencias */
    padding: 10px;

    color: #ffffff;
    margin-left: 80px;
    font-size: 16px;
    }
    .footer{
        background-image: linear-gradient(to right, #094d2c, #528b6f);
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
           padding: 16px;
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
       .footer-text {
    /* Estilos para los párrafos en el pie de página */
    margin-top: -30px;
    color: #ffffff;
    font-weight: 500;
    line-height: 1.3;
    }
       .box__footer a .fab{
           font-size: 20px;
       }
       .box__footer img{
           width: 200px;
           border-radius: 150px;
           margin-left: 70px;
       }
</style>
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
<!-- jQuery, Popper.js, y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="{{route('home') }}">Inicio</a></li>
            <li>
                <a href="{{route('conocenos_cedeit') }}">Cedeit</a>
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
            <li><a href="{{route('CETFOC') }}">Cetfoc</a></li>
            <li><a href="{{route('IMPACTO') }}">Impacto</a></li>
            <li>
                <a href="{{route('Rcedeit') }}">Inscripciones</a>
                <ul class="menu-vertical">
                    <li><a href="{{route('Rcedeit') }}">Procesos y requisitos para Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('pregrado') }}">Programas</a>
                    <ul class="menu-vertical">
                        <li><a href="{{route('pregrado') }}">U. Magdalena</a></li>
                        <li><a href="{{route('postgrado') }}">U. Iberoamericana</a></li>
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
        </ul>
    </nav>
    <?php
    $noticia = \App\Models\NoticiascedeitModel::findOrFail($id);
    ?>
    <section class="tile inline-tile">
        <div class="tile-body">
            <div class="tile-caption">
                <a title="">{{ $noticia->nombre }}</a>
                <p class="date">Publicado el {{ $noticia->fecha_publicacion}} {{ $noticia->hora_publicacion }} por {{ $noticia->autor }}</p>
            </div>
            <div class="tile-img">
                <div><img src="{{ asset('Imagenes/' . $noticia->imagen) }}" class="card-img-top" alt="Imagen" style="width: 900px; height: 500px; "></div>
            </div>
            <p>{{ $noticia->texto }}</p>
        </div>
        <div class="container">
            <nav class="sidebar">
                <h2 style="font-size: 17px;  font-weight: bold;">Publicaciones</h2>
                <a href="{{ route('noticedeit') }}">Noticias</a>
            </nav>
        </div>
    </section>
    <a href="https://api.whatsapp.com/send?phone=3246608071" class="btn-wsp" target="_blank"><i class="icon-whatsapp"></i></a>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img  src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="{{ asset('assets/Magdalena.jpg') }}" width="124" height="75" alt=""></a></li>
        </ul>
    </div>
    <footer class="footer">
       <div class="box__footer">
            <img src="{{ asset('assets/CEDEIT BLANCO.png') }}" alt=""></div>
       </div>
       <div class="container__footer">
            <div class="box__footer" style="margin-left: 5px;">
                <h2>Ubicación</h2>
                <p class="footer-text mb-1">Cra 10A No. 8-52 Popayán, Colombia</p>
                <p class="footer-text mb-1">Cel: 3184346680 - 3046047076</p>
                <p class="footer-text mb-1">Whatsapp: 3246608071</p>
                <p class="footer-text mb-1">Correo:  impacto.int@gmail.com</p>
                <p class="footer-text mb-1">Licencia de funcionamiento: 20231700075084</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cedeit') }}">Quienes Somos</a>
                <a href="{{ route('Rcedeit') }}">Proceso Matricula</a>
                <a href="{{ route('formacion_continua') }}">Programas</a>
                <a href="{{ route('conocenos_cedeit') }}#seccion7">Sedes</a>
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
