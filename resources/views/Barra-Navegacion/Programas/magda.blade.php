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
       #carouselExampleDark {
           z-index: -1; /* Esto colocará el carrusel detrás de otros element*/

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
       border-radius: 150px;
       margin-left: 70px;


   }
   /* Barra navegacion*/
   nav {
       background-image: linear-gradient(to right, #094d2c, #528b6f);
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
       background-image: linear-gradient(to right, #094d2c, #528b6f);
       color: rgb(77, 77, 77);
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
     /*Estilos para el Modulo de Noticias*/
.post-list{
    display: flex;
    min-height: 60vh;
    align-items: center;
    justify-content: center;
    padding: 30px 15px;
}
.content{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    max-width: 1000px;
    margin: auto;
}
.post-img-1{
    width: 100%;
    height: 100px;
    background-size: contain;
    background-position: center;
    transition: .2s;
}
.post{
    box-shadow: 0 1px 6px 1px rgba(0, 0, 0, .1);
    overflow: hidden;
    transition: .2s;
}
.post:hover{
    transform: translateY(-4px);
    box-shadow: 0 1px 14px 2px rgba(0, 0, 0, .15);
}
.post-header{
    width: 100%;
    height: 200px;
    overflow: hidden;
    cursor: pointer;
}
.post:hover .post-img-1{
    transform: scale(1.1);
}
.post-body{
    padding: 15px;
    text-align: center;
}
.post-body span{
    display: inline-block;
    color: #999;
    margin-bottom: 10px;
}
.post-body h2{
    margin-bottom: 15px;
    font-size: 14px;
    color: #555;
}
.post-body p{
    line-height: 1.5;
    margin-bottom: 20px;
    text-align: left;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Ajusta el número de líneas según tus necesidades */
    -webkit-box-orient: vertical;
    line-height: 1.5; /* Ajusta según el espacio entre líneas deseado */
    max-height: calc(1.5 * 3*1em);
}
.post-body p.id{
    background-color: #555;
    border-radius: 50px;
    color: #ffffff;
    display: inline-block;
    padding: 7px;
    margin-right: 10px;
    font-size: 0.75rem;

}
.post-body .post-link{
    display: block;
    text-decoration: none;
    padding: 10px;
    background: #2b6ebb;
    color: #fff;
    width: 50%;
    margin: auto;
    border-radius: 20px;
    box-shadow: 1px 2px 6px 1px rgba(0, 0, 0, .1);
    transition: .2s;
}
.post-body .post-link:hover{
    background: #3378c7;
    box-shadow: 1px 2px 6px 1px rgba(0, 0, 0, .2);
    transform: translateY(-2px);
}
@media screen and (max-width: 768px) {
    .container__footer {
        flex-direction: column;
        align-items: center;
    }

    .box__footer {
        margin-bottom: 10px;
    }

    .box__footer h2 {
        font-size: 16px;
    }

    .box__footer p, .box__footer a {
        font-size: 12px;
    }
}
/*Icono WhatsApp*/
.btn-wsp {
        position: fixed;
        width: 55px;
        height: 55px;
        line-height: 55px;
        bottom: 300px;
        right: 50px;
        background: rgb(77, 194, 71);
        color: #ffffff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
        z-index: 100;
    }

    .btn-wsp:hover {
        text-decoration: none;
        color: #0df053;
        background: #ffffff;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/whatsapp/css/fontello.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="home">Inicio</a></li>
            <li>
                <a href="conocenos_impacto">Conocenos</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion1">Quienes somos</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion2">Mision</a></li>
                    <li><a href="{{ route('conocenos_cedeit') }}#seccion3">Vision</a></li>
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
                <a href="Rcedeit">Inscripciones</a>
                <ul class="menu-vertical">
                    <li><a href="Rcedeit">Procesos y requisitos para Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('pregrado') }}">Programas</a>
                <ul class="menu-vertical">
                    <li><a href="{{route('formacion_continua') }}">Formación Continua</a></li>
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
            <form action="{{ url('/buscar') }}" method="GET">
                <input type="text" name="q" placeholder="Buscar...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </ul>
    </nav>
    <section id="seccion9">
        <h2 style="color: rgb(5, 31, 148);; font-size: 42px; text-align: left; text-align: center;">Oferta Académica</h2>
    </section>
    <section class="post-list">
        <div class="content">

            <?php
            $promagdalena = \App\Models\PromagdalenaModel::select('id','programa','codigo', 'oferta','metodologia','texto','semestre','imagen','documento')->get();
            ?>
            @foreach($promagdalena as $promag)
                <article class="post">
                    <div class="post-header">
                        <div class="post-img-1"><img src="{{ asset('Imagenes/' . $promag->imagen) }}"  class="card-img-top img-fluid"  alt="Imagen" style="width: 320px; height: 200px;"></div>
                    </div>
                    <div class="post-body">
                        <span>{{ $promag->oferta }}</span>
                        <h2>{{ $promag->programa }}</h2>
                        <p class="descripcion" style="height: 144px;"> {{ $promag->texto }} </p>
                        <p class="id">{{ $promag->metodologia }}</p><p class="id">SNIES:{{ $promag->codigo }}</p><p class="id">{{ $promag->semestre }} Semestre</p>
                        <a href="{{route('infomagda2', ['id' => $promag->id]) }}" class="post-link">Info...</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <a href="https://api.whatsapp.com/send?phone=3176424746" class="btn-wsp" target="_blank"><i class="icon-whatsapp"></i></a>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="assets/Magdalena.jpg" width="124" height="75" alt=""></a></li>
        </ul>
    </div>
    <footer class="footer">
       <div class="box__footer">
            <img src="assets/CEDEIT BLANCO.png" alt="">
       </div>
       <div class="container__footer">
            <div class="box__footer" style="margin-left: 5px;">
                <h2>Ubicación</h2>
                <p>Cra 10A No. 8-52 Popayán, Colombia</p>
                <p>Cel: 3184346680 - 3046047076</p>
                <p>Whatsapp: 3246608071</p>
                <p>Correo:  impacto.int@gmail.com</p>
                <p>Licencia de funcionamiento: 20231700075084</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cedeit') }}#seccion1">Quienes somos</a>
                <a href="Rcedeit">Proceso de Matricula</a>
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
