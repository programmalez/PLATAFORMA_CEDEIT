<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* Barra navegacion*/
    nav {
        background-image: linear-gradient(to right, #094d2c, #528b6f);
        overflow: auto;
        max-width: 930px;
        border-radius: 8px;
        margin: auto;
        font-family: Helvetica;
        font-size: 14px;
        padding: 5px;
        z-index: 999;
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
        background-image: linear-gradient(to right, #528b6f, #528b6f);
        color: white;
        border: none;
        padding: 14px 15px;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-image: linear-gradient(to right, #094d2c, #528b6f);
    }

    body {

        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: sans-serif;
    }

    /* Ajusta los estilos del icono según sea necesario */
    button i {
        margin-right: 5px;

    }

    .menu-horizontal {
        list-style: none;
        display: flex;
        justify-content: normal;

    }

    .menu-horizontal>li>a {
        display: block;
        padding: 15px 20px;
        color: white;
        text-decoration: none;
    }

    .menu-horizontal>li:hover {
        background-image: linear-gradient(to right, #094d2c, #528b6f);
    }

    .menu-vertical {
        position: absolute;
        display: none;
        list-style: none;
        width: 212px;
        background-image: linear-gradient(to right, #094d2c, #528b6f);
    }

    .menu-horizontal li:hover .menu-vertical {
        display: block;

    }

    .menu-vertical li:hover {
        text-align: left;
        background-color: rgb(12, 73, 230);
    }

    .menu-vertical li a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 5px;
    }

    .footer {
        background-image: linear-gradient(to right, #094d2c, #528b6f);
        padding: 0.3em 0;
        display: flex;
        margin-top: auto;
        align-items: center;
        background-size: cover;
    }

    .container__footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: auto;
        margin-top: 0px;
    }

    .box__footer {
        display: flex;
        flex-direction: column;
        padding: 26px;
        color: #ffffff;
        line-height: 0.8;
    }

    .box__footer h2 {
        margin-bottom: 20px;
        color: #ffffff;
        font-weight: 700;
        font-size: 24px;

    }

    .box__footer a {
        margin-top: 10px;
        color: #ffffff;
        font-weight: 600;
        text-decoration: none;
    }

    .box__footer a:hover {
        opacity: 0.8;
        text-decoration: none;
    }

    .box__footer p {
        margin-top: 10px;
        color: #ffffff;
        line-height: 0.2;
        font-weight: 600;
    }

    .box__footer a .fab {
        font-size: 20px;
    }

    .box__footer1 img {
        width: 200px;
        border-radius: 150px;
        margin-left: 70px;
        margin-top: -70px;
    }

    /*Icono WhatsApp*/
    .btn-wsp {
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

    .btn-wsp:hover {
        text-decoration: none;
        color: #0df053;
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


    .texto-azul-oscuro {
        color: rgb(13, 40, 110);
        /* Código hexadecimal para un tono específico de azul oscuro */
    }

    section {
        padding: 65px;
        /* Relleno dentro de todas las secciones*/
        text-align: ;
    }

    /*estilos plan de estudios*/
    /*Barra Lateral*/
    .container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* Divide el contenedor en tres columnas */
        gap: 20px;
        /* Espacio entre las columnas */
    }

    .sidebar {
        width: 300px;
        background-color: #f8f8f8;
        padding: 20px;
        float: left;
        grid-column: 1 / span 1;
    }

    .box {
        margin-bottom: 20px;
        /* Espacio entre las cajas */
        color: #000000;
        font-size: 16px;
        font-family: Arial;
    }

    .box h2 {
        margin-top: 0;
        color: rgb(5, 72, 148);
        font-weight: bold;
        font-size: 14px;
        font-family: Arial;
    }

    .line {
        height: 1px;
        background-color: #ccc;
        margin-top: 0px;
        margin-bottom: 5px;
    }

    /* Perfiles*/
    .post-list {
        padding: 20px;
    }

    .post-header h2 {
        font-size: 32px;
        font-weight: bold;
        color: #155183;
        font-family: Arial;
        margin-top: -30px;
        margin-left: -20px;
        grid-column: 2 / span 2;
    }

    .post-body {}

    .post-body h2 {
        font-size: 32px;
        color: #ffffff;
        font-family: Arial;
        background-image: linear-gradient(to right, #155183, #5088b6);
        border-radius: 20px;
        text-align: center;

    }

    .post-body p {
        width: 100%;
        font-size: 16px;
        color: #000000;
        font-family: Arial;
        margin-left: 0px;
        margin-top: 10px;
    }

    .post-img-2 {
        width: 600px;
        /* Ajusta el ancho de la imagen según sea necesario */
        height: 400px;
        margin-top: -10px;
        margin-left: -20px;
        z-index: -1;
    }

    .third-column {
        grid-column: 3 / span 3;
        /* La tercera columna ocupará la tercera columna del grid */
        display: flex;
        justify-content: flex-end;
        /* Alinea el contenido hacia la derecha */
        align-items: flex-start;
        margin-left: auto;
        /* Crea un margen hacia la izquierda */
    }

    .button-container {
        text-align: center;
        /* Alinea los botones horizontalmente en el centro */
        margin-top: 80px;
        /* Espacio superior entre los botones */
    }

    .btn-custom {
        display: block;
        width: 220px;
        height: 100px;
        margin-bottom: -380px;
        /* Espacio inferior entre los botones */
        background-color: #003A6B;
        color: #ffffff;
        /* Texto en color blanco */
        border: none;
        /* Sin borde */
        padding: 10px 20px;
        /* Ajusta el relleno según sea necesario */
        border-radius: 5px;
        /* Bordes redondeados */
        cursor: pointer;
        /* Cambia el cursor al pasar por encima */
        margin-top: 170px;
        margin-right: 40px;
    }

    .descargar {
        background-image: linear-gradient(to right, #094d2c, #528b6f);

    }

    /* Estilos para cuando el cursor está sobre el botón */
    .btn-custom:hover {
        background-color: #00254a;
        /* Cambia el color de fondo al pasar el cursor */
    }

    <style>.btn-gray {
        background-color: #9b9898;
        color: #000000;
        /* Color del texto */
        border: none;
        border-radius: 50%;
        padding: 10px;
        font-size: 20px;
        cursor: pointer;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-...tu-integridad-aqui..." crossorigin="anonymous" />


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
            <ul class="menu-horizontal">
                <li><a href="{{ url('/home') }}">Inicio</a></li>
                <li>
                    <a href="{{ url('/conocenos_cedeit') }}">Cedeit</a>
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
                <li><a href="{{ route('CETFOC') }}">Cetfoc</a></li>
                <li><a href="{{ route('IMPACTO') }}">Impacto</a></li>
                <li>
                    <a href="{{ route('Rcedeit') }}">Inscripciones</a>
                    <ul class="menu-vertical">
                        <li><a href="{{ route('Rcedeit') }}">Procesos y requisitos para Estudiantes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('formacion_continua') }}">Programas</a>
                    <ul class="menu-vertical">
                        <li><a href="{{ route('formacion_continua') }}">Formacion Continua</a></li>
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
                <form action="{{ url('/buscar') }}" method="GET">
                    <input type="text" name="q" placeholder="Buscar...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </ul>
        </ul>
    </nav>
    <?php
    $progibe = \App\Models\ProiberoModel::findOrFail($id);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 " style="z-index: 0;">
                <div style="text-align: left; margin-top: 20px;">
                    <button onclick="goBack()" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></button>
                </div>
                <div class="container">
                    <div class="sidebar">
                        <div class="box">
                            <h2>Programa Académico</h2>
                            <p>{{ $progibe->programa }}</p>
                            <div class="line"></div>
                        </div>
                        <div class="box">
                            <h2>Codigo SNIES</h2>
                            <p>{{ $progibe->codigo }}</p>
                            <div class="line"></div>
                        </div>
                        <div class="box">
                            <h2>Titulo que otorga</h2>
                            <p>{{ $progibe->titulo }}</p>
                            <div class="line"></div>
                        </div>
                        <div class="box">
                            <h2>Numero de creditos Academicos</h2>
                            <p>{{ $progibe->creditos }}</p>
                            <div class="line"></div>
                        </div>
                        <div class="box">
                            <h2>Nivel de formacion</h2>
                            <p>{{ $progibe->formacion }}</p>
                            <div class="line"></div>
                        </div>
                        <div class="box">
                            <h2>Metodologia</h2>
                            <p>{{ $progibe->metodologia }}</p>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" style="z-index: 1;">
                <section class="post-list">
                    <div class="content">
                        <article class="post">
                            <div class="post-header">
                                <h2 style="margin-top: 0px"> {{ $progibe->programa }}</h2>
                                <div class="post-img-2"><img src="{{ asset('Imagenes/' . $progibe->imagen) }}"
                                        class="card-img-top img-fluid" alt="Imagen"
                                        style="width: 600px; height: 380px; max-width: 600px; max-height: 380px; border: none;">
                                </div>
                            </div>
                            <div class="post-body">
                                <h2>Informacion del curso</h2>
                                <div class="box-paragraph">
                                    <p style="text-align: justify;">{{ $progibe->texto }} </p>
                                </div>
                                <h2>Perfil profesional</h2>
                                <div>
                                    <p style="text-align: justify;">{{ $progibe->profesional }} </p>
                                    <h2>Mercado Laboral</h2>
                                    <p style="text-align: justify;">{{ $progibe->mercado }}</p>
                                </div>
                        </article>
                    </div>
                </section>
            </div>
            <div class="col-3 ">
                <div class="third-column">

                    <div class="button-container">
                        <!-- Botón de Suscripción -->
                        <a href="{{ asset('Documentos/' . $progibe->documento) }}" class="btn-custom descargar"
                            style="width: 220px; height: 100px; text-decoration: none;"
                            onclick="abrirEnNuevaPestana(event)">
                            DESCARGA EL PLAN DE ESTUDIOS
                        </a>
                        <button type="button" class="btn-custom informacion" style="width: 220px; height: 100px; "
                            data-toggle="modal" data-target="#suscripcionModal">
                            SOLICITAR INFORMACION
                        </button>
                        <button type="button" class="btn-custom matricula" style="width: 220px; height: 100px; "
                            data-toggle="modal" data-target="#suscripcionModal2">
                            MATRICULATE AHORA
                        </button>
                    </div>
                    <!-- Modal de Suscripción -->
                    <div class="modal fade" id="suscripcionModal" tabindex="-1" role="dialog"
                        aria-labelledby="suscripcionModalLabel" aria-hidden="true">
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
                                    <form action="{{ route('insertaribe') }}" method="post">
                                        @csrf
                                        <p>Déjanos tus datos y te contáctaremos para darte una asesoría personalizada.
                                        </p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nombres">Nombres:</label>
                                                <input type="text" class="form-control" id="nombres"
                                                    name="nombres" style="width: 235px;" placeholder="Nombres"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="apellidos">Apellidos:</label>
                                                <input type="text" class="form-control" id="apellidos"
                                                    name="apellidos" style="width: 235px;" placeholder="Apellidos"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="identificacion">Tipo de documento:</label>
                                                <select id="identificacion" name="identificacion"
                                                    style="width: 240px; height: 40px; border: 1px solid #d7d3d3; border-radius:5px;">
                                                    <option value="" disabled selected>Seleccione Documento
                                                    </option>
                                                    <option value="cedulaCiudadania">CEDULA DE CIUDADANIA</option>
                                                    <option value="cedulaExtranjeria">CEDULA DE EXTRANJERIA</option>
                                                    <option value="pasaporte">PASAPORTE</option>
                                                    <option value="tarjetaIdentidad">TARJETA DE IDENTIDAD</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="documento">Número documento:</label>
                                                <input type="text" class="form-control ml-2" id="documento"
                                                    name="documento" style="width: 230px;"
                                                    placeholder="Número de documento" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="lugar">Lugar de residencia:</label>
                                                <input type="text" class="form-control" id="lugar"
                                                    id="lugar" name="lugar" placeholder="Dirección" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="celular">Celular:</label>
                                                <input type="text" class="form-control" id="celular"
                                                    name="celular" placeholder="Celular" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="correo">Correo:</label>
                                                <input type="text" class="form-control" id="correo"
                                                    name="correo" style="width: 470px;"
                                                    placeholder="Correo Electronico" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="programa">Programa de interés:</label>
                                                <select id="programa" name="programa"
                                                    style="width: 387px; height: 40px; border: 1px solid #d7d3d3; border-radius: 5px;">
                                                    <?php
                                                    // Obtener los nombres de los cursos usando el modelo ProcetModel
                                                    $programas = \App\Models\ProiberoModel::pluck('programa');

                                                    // Generar las opciones del select con los nombres de los cursos
                                                    foreach ($programas as $programa) {
                                                        echo '<option value="' . $programa . '">' . $programa . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="como_se_entero">¿Cómo se enteró del instituto?:</label>
                                                <select id="como_se_entero" name="como_se_entero"
                                                    style="width: 227px; height: 40px; border: 1px solid #d7d3d3; border-radius: 5px;">
                                                    <option value="" disabled selected>-</option>
                                                    <option value="Radio">Radio</option>
                                                    <option value="Redes sociales">Redes sociales</option>
                                                    <option value="Recomendación">Recomendación</option>
                                                    <option value="Volantes">Volantes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary" onclick="alerta()">Enviar datos</button>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal de Suscripción -->
                <div class="modal fade" id="suscripcionModal2" tabindex="-1" role="dialog"
                    aria-labelledby="suscripcionModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="suscripcionModalLabel">Matricula de inscripción</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Agregar aquí los campos del formulario (nombre, correo, celular, etc.) -->
                                <form action="{{ route('Matribero') }}" method="post">
                                    @csrf
                                    <p>Formulario de Inscripción a DISTANCIA o VIRTUAL.</p>
                                    <div class="form-row">
                                        <input type="hidden" name="id_programa" value="{{ $id }}"/>
                                        <div class="form-group col-md-4">
                                            <label for="nombres">Nombres:</label>
                                            <input type="text" class="form-control" id="nombres" name="nombres"
                                                style="width: 250px;" placeholder="Nombres" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="apellidos">Apellidos:</label>
                                            <input type="text" class="form-control" id="apellidos"
                                                name="apellidos" style="width: 250px;" placeholder="Apellidos"
                                                required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="sexo">Sexo:</label>
                                            <select id="sexo" name="sexo"
                                                style="width: 240px; height: 40px; border: 1px solid #d7d3d3; border-radius:5px;">
                                                <option value="" disabled selected>Seleccione Sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="identificacion">Tipo de documento:</label>
                                            <select id="identificacion" name="identificacion"
                                                style="width: 190px; height: 40px; border: 1px solid #d7d3d3; border-radius:5px;">
                                                <option value="" disabled selected>Seleccione Documento</option>
                                                <option value="cedulaCiudadania">CEDULA DE CIUDADANIA</option>
                                                <option value="cedulaExtranjeria">CEDULA DE EXTRANJERIA</option>
                                                <option value="pasaporte">PASAPORTE</option>
                                                <option value="tarjetaIdentidad">TARJETA DE IDENTIDAD</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="documento">Número documento:</label>
                                            <input type="number" class="form-control ml-2" id="documento"
                                                name="documento" style="width: 180px;"
                                                placeholder="Número de documento" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="lugarexpe">Lugar de Expedición :*</label>
                                            <input type="text" class="form-control" id="lugarexpe"
                                                name="lugarexpe" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fechaexpe">Fecha de Expedición:*</label>
                                            <input type="date" class="form-control" id="fechaexpe"
                                                name="fechaexpe" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="nacimiento">Lugar de nacimiento:*</label>
                                            <input type="text" class="form-control" id="nacimiento"
                                                name="nacimiento" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="nacifecha">Fecha de Nacimiento:*</label>
                                            <input type="date" class="form-control" id="nacifecha"
                                                name="nacifecha" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="direccion">Dirección:</label>
                                            <input type="text" class="form-control" id="direccion" id="direccion"
                                                name="direccion" placeholder="Dirección" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="estrato">Estrato:</label>
                                            <input type="text" class="form-control" id="estrato" name="estrato"
                                                placeholder="Estrato" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="correo">Correo:</label>
                                            <input type="text" class="form-control" id="correo" name="correo"
                                                style="width: 310px;" placeholder="Correo Electronico" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="celular1">Celular 1:</label>
                                            <input type="text" class="form-control" id="celular1"
                                                name="celular1" placeholder="Celular" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="celular2">Celular 2:</label>
                                            <input type="text" class="form-control" id="celular2"
                                                name="celular2" placeholder="Celular" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="institucion">INSTITUCIÓN EDUCATIVA (Bachiller):</label>
                                            <input type="text" class="form-control" id="institucion"
                                                name="institucion" style="width: 380px;"
                                                placeholder="Nombre Institucion" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="titulo">TITULO:</label>
                                            <input type="text" class="form-control" id="titulo" name="titulo"
                                                placeholder="Titulo" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="año">AÑO:</label>
                                            <input type="number" class="form-control" id="año" name="año"
                                                placeholder="Año" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="instituto2">INSTITUCIÓN EDUCATIVA (otros estudios):</label>
                                            <input type="text" class="form-control" id="instituto2"
                                                name="instituto2" style="width: 380px;"
                                                placeholder="Nombre Institucion" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="titulo2">TITULO:</label>
                                            <input type="text" class="form-control" id="titulo2" name="titulo2"
                                                placeholder="Titulo" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="año2">AÑO:</label>
                                            <input type="number" class="form-control" id="año2" name="año2"
                                                placeholder="Año" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="programa">PROGRAMA A CURSAR:</label>
                                            <select id="programa" name="programa" style="width: 347px; height: 40px; border: 1px solid #d7d3d3; border-radius: 5px;">
                                                <?php
                                                // Obtener los nombres de los programas y modalidades usando el modelo PromagdalenaModel
                                                $programas = \App\Models\ProiberoModel::select('id','programa', 'metodologia')->get();

                                                // Generar las opciones del select con los nombres de los programas y modalidades
                                                foreach ($programas as $programa) {
                                                    echo '<option value="'.$programa->id.'">' . $programa->programa . ' - ' . $programa->metodologia . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-md-4">
                                        <label for="modalidad">Modalidad:</label>
                                        <select id="modalidad" name="modalidad"
                                            style="width: 190px; height: 40px; border: 1px solid #d7d3d3; border-radius:5px;">
                                            <option value="" disabled selected>Seleccione Modalidad</option>
                                            <option value="Virtual">Virtual</option>
                                            <option value="Distancia">Distancia</option>

                                        </select>
                                    </div> --}}
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" onclick="alerta2()">Matricularse</button>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="box__footer1">
            <img src="{{ asset('assets/CEDEIT BLANCO.png') }}" alt="" style="margin-top: 10px">
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
                <a href="https://www.facebook.com/profile.php?id=100079197482553&mibextid=eHce3h"><iclass="bi bi-facebook"></i> Facebook</a>
                <a href="https://api.whatsapp.com/send?phone=3246608071"><i class="bi bi-whatsapp"></i>Whatsapp</a>
                <a href=""><i class="bi bi-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>
</body>
<script>
    function abrirEnNuevaPestana(event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
        var url = event.currentTarget.getAttribute('href');
        window.open(url, '_blank');
    }
</script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<script>
    function alerta() {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Envio Correcto",
            showConfirmButton: false,
            timer: 2000
        });
    }
    function alerta2() {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "¡Gracias por Matricularte!",
            showConfirmButton: false,
            timer: 2000
        });
    }
</script>

</html>
