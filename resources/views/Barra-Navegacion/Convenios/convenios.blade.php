<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* Barra navegacion*/
    nav {
        background-image: linear-gradient(to right, #094d2c, #528b6f);
        overflow: auto;
        max-width: 990px;
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
        background-image: linear-gradient(to right, #094d2c, #528b6f);
    }

    .menu-vertical li a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 5px;

    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: sans-serif;
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

    .box__footer img {
        width: 200px;
        border-radius: 100px;
        margin-left: 70px;
    }

    /* Ajusta los estilos del icono según sea necesario */
    button i {
        margin-right: 5px;

    }

    /* Estilos Imagen De cabecera*/
    .titulo {
        position: relative;
        width: 100%;
        height: 300px;
        background-image: url('{{ asset('assets/cedeitcorrusel.png') }}');
        background-size: cover;
        background-position: center 50%;
        color: rgb(255, 255, 255);
        text-align: center;
        padding-top: -100px;
        z-index: 1;
    }

    .titulo p {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 52px;
        font-weight: bold;
    }

    section {
        padding: 10px;
        /* Relleno dentro de todas las secciones*/
        border: 1px solid #ffffff;
        /* Borde para todas las sec*/
        columns: 2;
    }

    #seccion1 {
        background-color: rgb(255, 255, 255);
        color: #333;
        padding: 20px;
        display: grid;
        margin: 0 40px;

    }

    #seccion1 h2 {

        text-align: left; /* Alineación a la izquierda */
    }

    #seccion1 p {
        width: 800px;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;

    }

    #seccion2 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;


    }

    #seccion2 h2 {

        text-align: left; /* Alineación a la izquierda */

    }

    #seccion2 p {
        width: 800px;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    /*Barra Lateral*/
    .sidebar {
            background-color: #fdfdfd; /* Color de fondo de la barra lateral */
            color: #ffffff; /* Color del texto de la barra lateral */
            padding: 20px; /* Espaciado interno */
            height: 30vh; /* Altura completa de la ventana */

        }

        .sidebar a {
            display: block; /* Hace que los enlaces ocupen todo el ancho de la barra lateral */
            padding: 10px 0; /* Espaciado vertical */
            color: inherit; /* Color de texto heredado */
            text-decoration: none; /* Quita el subrayado del texto */
            font-size: 17px;
        }

        .sidebar a:hover {
            background-image: linear-gradient(to right, #094d2c, #528b6f);/* Color de fondo cuando se pasa el ratón por encima */
        }
        .container-main {
    margin-top: 300px; /* Ajusta el margen superior para dejar espacio para la imagen de cabecera */
    position: relative;
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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-...tu-integridad-aqui..." crossorigin="anonymous" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                <a href="Convenios">Convenios</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('Convenios') }}#seccion1">Universidad Ibeoamericana</a></li>
                    <li><a href="{{ route('Convenios') }}#seccion2">Universidad del Magdalena</a></li>
                </ul>
            </li>
            <form id="searchForm" >
                <input type="text" id="searchInput" placeholder="Buscar...">
                <button type="button" onclick="search()" class="fa fa-search"></button>
            </form>
        </ul>
    </nav>
    <div class="titulo">
        <p>CONVENIOS</p>
    </div>
    <div id="searchResults">
        <div class="container-fluid">
            <div class="row">
                <!-- Primera columna -->
                <div class="col-3" style="padding: 20px;">
                    <div class="container">
                        <nav class="sidebar">
                            <p style="color: #ffffff; font-size: 22px;">Convenios</p>
                            <a href="#seccion1">Universidad Ibeoamericana</a>
                            <a href="#seccion2">Universidad del Magdalena</a>
                        </nav>
                    </div>
                </div>
                <!-- Segunda columna -->
                <div class="col-9" style="padding: 20px;" >
                    <section id="seccion1">
                        <h2>Convenio Universidad Iberoamericana</h2>
                        <p> El CEDEIT S.A.S. es un grupo humano empresarial, cuyo propósito es brindar servicios de
                            distribución, asesoría y capacitación óptimos y competentes para el sector educativo, tecnológico
                            y de ingeniería, mediante la oferta propia y la firma de convenios, con entidades debidamente
                            legalizadas y profesionalmente reconocidas, nacionales e internacionales, convenios a través de
                            los cuales se garantiza la calidad en los servicios ofertados o administrados. EL CEDEIT S.A.S
                            se mantiene fiel a una política claramente definida para la gestión del conocimiento y la calidad,
                            mediante procesos estructurados y orientados bajo principios de compromiso, transparencia,
                            honestidad y servicio social; generando así, mayores y mejores oportunidades a las futuras
                            generaciones de profesionales del país.
                        </p>
                        <a href="assets\ORGANIZACION INSTITUCIONAL.pdf">organigramaInstitucional.pdf</a>
                    </section>
                    <section id="seccion2">
                        <h2>Convenio Universidad Magdalena</h2>
                        <p> El CEDEIT S.A.S. es un grupo humano empresarial, cuyo propósito es brindar servicios de
                            distribución, asesoría y capacitación óptimos y competentes para el sector educativo, tecnológico
                            y de ingeniería, mediante la oferta propia y la firma de convenios, con entidades debidamente
                            legalizadas y profesionalmente reconocidas, nacionales e internacionales, convenios a través de
                            los cuales se garantiza la calidad en los servicios ofertados o administrados. EL CEDEIT S.A.S
                            se mantiene fiel a una política claramente definida para la gestión del conocimiento y la calidad,
                            mediante procesos estructurados y orientados bajo principios de compromiso, transparencia,
                            honestidad y servicio social; generando así, mayores y mejores oportunidades a las futuras
                            generaciones de profesionales del país.
                        </p>
                        <a href="assets\ORGANIZACION INSTITUCIONAL.pdf">organigramaInstitucional.pdf</a>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="{{ asset('assets/Magdalena.jpg') }}" width="124" height="75" alt=""></a></li>
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
                <p>Correo: cetfot@gmail.com</p>
                <p>Licencia de funcionamiento: 20231700075094</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cedeit') }}">Quienes somos</a>
                <a href="Rcedeit">Proceso Matricula</a>
                <a href="formacion_continua">Programas</a>
                <a href="{{ route('conocenos_cedeit') }}#seccion7">Sedes</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.facebook.com/profile.php?id=100079197482553&mibextid=eHce3h"><i
                        class="bi bi-facebook"></i> Facebook</a>
                <a href="https://api.whatsapp.com/send?phone=3246608071"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                <a href=""><i class="bi bi-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>
    <script>
        function search() {
            var query = document.getElementById("searchInput").value.toLowerCase();
            var content = document.querySelectorAll("#seccion1, #seccion2, #seccion3, #seccion4, #seccion5, #seccion6, #seccion7, #seccion8");

            // Iterar sobre cada sección y buscar la consulta
            content.forEach(function(section) {
                var sectionContent = section.textContent.toLowerCase();
                if (sectionContent.includes(query)) {
                    // Si la sección contiene la consulta, mostrarla
                    section.classList.remove('hidden');
                    // Desplazar la página hacia la sección
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    // Si no contiene la consulta, ocultarla
                    section.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>
