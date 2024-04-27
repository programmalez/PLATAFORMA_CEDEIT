<!DOCTYPE html>
<html lang="en">
<style>
    /* Barra navegacion*/
    nav {
        background-color: rgb(6, 22, 63);
        overflow: auto;
        max-width: 960px;
        border-radius: 8px;
        margin: auto;
        font-family: Helvetica;
        font-size: 14px;
        padding: 5px;
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
        background-color: rgb(6, 22, 63);
        color: rgb(153, 152, 152);
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
        background-color: rgb(6, 22, 63);
        color: white;
        border: none;
        padding: 14px 15px;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: rgb(6, 22, 63);
    }
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: sans-serif;
    }
    .footer{
        background-color:rgb(6, 22, 63);
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
        margin-top: -70px;
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
        background-color: rgb(6, 22, 63);
    }
    .menu-vertical{
        position: absolute;
        display: none;
        list-style: none;
        width: 212px;
        background-color:  rgb(6, 22, 63);
    }
    .menu-horizontal li:hover .menu-vertical{
        display: block;
    }
    .menu-vertical li:hover{
        text-align: left;
        background-color: rgb(6, 22, 63);
    }
    .menu-vertical li a{
        display: block;
        color: white;
        text-decoration: none;
        padding: 5px;
    }
        /* Estilos Impacto*/
    .titulo{
        padding: 50px;
        background-color: rgb(5, 8, 39);
        font-family: 'Open Sans', sans-serif;
        font-size: 42px;
        align-self: center;
        text-align: center;
    }
    section {
        padding: 10px; /* Relleno dentro de todas las secciones*/
        border: 1px solid #ffffff; /* Borde para todas las sec*/
        columns: 2;
    }
    #seccion1 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
    }
    #seccion1 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }
    #seccion1 p{
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
    }

     /*Icono WhatsApp*/
    .btn-wsp{
        position: fixed;
        width: 55px;
        height: 55px;
        line-height: 50px;
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
   /*Estilos Informacion Imagen y texto*/
   body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
        }
        .column {
        width: 48%;
        margin-bottom: 20px;
        }

    img {
        width: 80%;
        height: 80%;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
        transform: translateY(20%);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
        }
        .texto-azul-oscuro {
        color: rgb(13, 40, 110);  /* Código hexadecimal para un tono específico de azul oscuro */
    }
    section {
        width: 100%; /* Ocupa todo el ancho de la página */
        padding: 10;
        background-color: #f0f0f0;
        display: flex; /* Usamos flexbox para centrar verticalmente */
        justify-content: center; /* Centramos horizontalmente */
        align-items: center; /* Centramos verticalmente */
    }
    #a {
        text-align: center;
        padding: 20px;
        text-align: left;
    }

    /* Estilos para el título */
    #a .titulo {
        color:  rgb(6, 22, 63);
        background-color: white; /* Fondo blanco */
        padding: 10px 20px; /* Agregar un poco de relleno al título */
        display: inline-block; /* Hacer que el fondo blanco se ajuste al ancho del texto */
        border-radius: 10px; /* Añadir esquinas redondeadas */
    }
    /* Estilos para el párrafo */
    #a .descripcion {
        /* Ajusta el ancho del párrafo para asegurarte de que no se muestre en dos columnas */
        max-width: 1100px; /* Puedes ajustar este valor según sea necesario */
        margin: 0 auto;/* Centra el párrafo horizontalmente */
        text-align: justify;
    }
    /* Estilos para la clase perfil */
    /* Estilos para el contenedor principal */
    .contenedor-principal {
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: justify;

    }

    /* Estilos para la clase perfil */
    .perfil {
        margin-bottom: 20px;
    }

    /* Estilos para los títulos h2 dentro de la clase perfil */
    .perfil h2 {
        font-size: 36px;
        color: #333;
        margin-bottom: 10px;
        color: rgb(13, 62, 187);
    }

    /* Estilos para la lista ul dentro de la clase perfil */
    .perfil ul {

        padding-left: 10;
    }

    /* Estilos para los elementos li dentro de la lista ul dentro de la clase perfil */
    .perfil ul li {
        font-size: 16px;
        color: #000000;
        margin-bottom: 5px;
    }

    /* Estilos para el botón de descarga */
    .boton-descarga {
        display: block;
        width: 300px;
        padding: 10px;
        text-align: center;
        background-color: #28a745;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 120px auto 0;
    }

    /* Estilos para el botón de descarga al pasar el cursor sobre él */
    .boton-descarga:hover {
        background-color: #5eb472;
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ url('/Impacto') }}">Inicio</a></li>
            <li>
                <a href="{{ url('/conocenos_impacto') }}">Conocenos</a>
                <ul class="menu-vertical">
                     <li><a href="{{ route('conocenos_impacto') }}#seccion1">Filosofia Institucional</a></li>
                     <li><a href="{{ route('conocenos_impacto') }}#seccion2">Misión</a></li>
                     <li><a href="{{ route('conocenos_impacto') }}#seccion3">Visión</a></li>
                     <li><a href="{{ route('conocenos_impacto') }}#seccion4">Principios Institucionales</a></li>
                     <li><a href="{{ route('conocenos_impacto') }}#seccion5">Sedes</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/Rimpacto') }}">Admisiones</a>
                <ul class="menu-vertical">
                    <li><a href="{{ url('/Rimpacto') }}">Procesos y requisitos para Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('tecnicolaboral_impacto') }}">Programas</a>
                <ul class="menu-vertical">
                    <li><a href="{{route('tecnicolaboral_impacto') }}">Tecnico Laboral por competencias</a></li>
                </ul>
            </li>
            <form action="{{ url('/buscar') }}" method="GET">
                <input type="text" name="q" placeholder="Buscar...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </ul>
    </nav>
    <?php
    $proim = \App\Models\ProimpactModel::findOrFail($id);
    ?>
    <div class="container">
        <!-- Primera columna: Título del curso -->
        <div class="column">
            <div style="text-align: left; margin-top: 0px;">
                <button onclick="goBack()" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></button>
            </div>
            <h2 style=" text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{ $proim->curso }}</h2>
            <div class=" mb-5 lead">
                <ul class="list-inline">
                    <li class=" mb-3 "><i class="fa fa-check mr-2 texto-azul-oscuro"></i>Matrículas Abiertas</li>
                    <li class="mb-3"><i class=" fa fa-check mr-2 texto-azul-oscuro"></i>Llámanos: 324-660-8071</li>
                    <li class="mb-3"><i class="fa fa-check mr-2 texto-azul-oscuro"></i>Licencia de funcionamiento {{ $proim->licencia }}</li>
                </ul>
            </div>
             <!-- Botón de Suscripción -->
            <button type="button" class="btn btn-primary ml-5 " style="width: 200px; " data-toggle="modal" data-target="#suscripcionModal">
            PREINSCRIBETE GRATIS
            </button>
            <!-- Modal de Suscripción -->
            <div class="modal fade" id="suscripcionModal" tabindex="-1" role="dialog" aria-labelledby="suscripcionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="suscripcionModalLabel">Preinscribete Gratis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Agregar aquí los campos del formulario (nombre, correo, celular, etc.) -->
                            <form action="{{ route('insertar2') }}" method="post">
                                @csrf
                                <p>Déjanos tus datos y te contáctaremos para darte una asesoría personalizada.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombres:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombres" style="width: 235px;" placeholder="Nombres" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="apellidos">Apellidos:</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" style="width: 235px;" placeholder="Apellidos" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="identificacion">Tipo de documento:</label>
                                        <select id="identificacion" name="identificacion" style="width: 240px; height: 40px; border: 1px solid #d7d3d3; border-radius:5px;">
                                            <option value="" disabled selected>Seleccione Documento</option>
                                            <option value="cedulaCiudadania">CEDULA DE CIUDADANIA</option>
                                            <option value="cedulaExtranjeria">CEDULA DE EXTRANJERIA</option>
                                            <option value="pasaporte">PASAPORTE</option>
                                            <option value="tarjetaIdentidad">TARJETA DE IDENTIDAD</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="documento">Número documento:</label>
                                        <input type="text" class="form-control ml-2" id="documento" name="documento" style="width: 230px;"  placeholder="Número de documento" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lugar">Lugar de residencia:</label>
                                        <input type="text" class="form-control" id="lugar" name="lugar"  placeholder="Dirección" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="correo">Correo:</label>
                                        <input type="text" class="form-control" id="correo" name="correo" style="width: 470px;" placeholder="Correo Electronico" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="programa">Programa de interés:</label>
                                        <select id="programa" name="programa" style="width: 347px; height: 40px; border: 1px solid #d7d3d3; border-radius: 5px;">
                                            <option value="" disabled selected>TÉCNICO LABORAL POR COMPETENCIAS EN</option>
                                            <option value="Auxiliar Administrativo">AUXILIAR EN ADMINISTRATIVO</option>
                                            <option value="Auxiliar en Saneamiento Basico">AUXILIAR EN SANEAMIENTO BASICO</option>
                                            <option value="Ocupaciones Religiosas">OCUPACIONES RELIGIOSAS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="como_se_entero">¿Cómo se enteró del instituto?:</label>
                                        <select id="como_se_entero" name="como_se_entero" style="width: 227px; height: 40px; border: 1px solid #d7d3d3; border-radius: 5px;">
                                            <option value="" disabled selected>-</option>
                                            <option value="Radio">Radio</option>
                                            <option value="Redes sociales">Redes sociales</option>
                                            <option value="Recomendación">Recomendación</option>
                                            <option value="Volantes">Volantes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" onclick="alerta()">Enviar datos</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Segunda columna: Imagen que representa el curso -->
        <div class="column">
            <img src="{{ asset('Imagenes/' . $proim->imagen) }}" alt="Imagen del Curso 1">
        </div>
        <div id="a">
            <h2 class="titulo">Información del Programa</h2>
            <p class="descripcion">{{ $proim->texto }}</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contenedor-principal">
                        <div class="row">
                            <!-- Primera columna -->
                            <div class="col-md-6">
                                <div class="perfil">
                                    <h2>Requisitos de matricula</h2>
                                    <ul>
                                        <li>Fotocopia de cédula al 150% ampliada.</li>
                                        <li>Diploma y acta de grado de bachiller.</li>
                                        <li>Dos fotos 3x4 con fondo azul.</li>
                                        <li>Recibo de servicio público.</li>
                                    </ul>
                                </div>
                                <div class="perfil">
                                    <h2>Registro de Programa</h2>
                                    <p>Licencia de funcionamiento {{ $proim->licencia }}</p>
                                </div>
                                <div class="perfil">
                                    <h2>Certificado que recibe</h2>
                                    <p>{{ $proim->curso }}</p>
                                </div>
                            </div>
                            <!-- Segunda columna -->
                            <div class="col-md-6">
                                <div class="perfil">
                                    <h2>Perfil Ocupacional</h2>
                                    <p>{{ $proim->perfil }}</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ asset('Documentos/' . $proim->documento) }}" download
                            class="boton-descarga">Descargar Pensum Academico</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="box__footer">
            <img src={{ asset('assets/impacto.jpeg')}} class="second-image">
        </div>
        <div class="container__footer">
            <div class="box__footer" style="margin-left: 5px;">
                <h2>Ubicación</h2>
                <p>Cra 10A No. 8-52 Popayán, Colombia</p>
                <p>Cel: 3184346680 - 3046047076</p>
                <p>Whatsapp: 3246608071</p>
                <p>Correo:  impacto.int@gmail.com</p>
                <p>LICENCIA DE FUNCIONAMIENTO: 20231700075084</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_impacto') }}#seccion1">Quienes somos</a>
                <a href="Rimpacto">Proceso de Matricula</a>
                <a href="{{ route('tecnicolaboral_impacto') }}">Programas</a>
                <a href="{{ route('conocenos_impacto') }}#seccion5">Sedes</a>
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
<script>
    function goBack() {
        window.history.back();
    }
    function alerta() {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Envio Correcto",
            showConfirmButton: false,
            timer: 2500
        });
    }
</script>

</html>
