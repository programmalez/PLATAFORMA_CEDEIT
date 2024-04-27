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

    .carousel-inner img {
        max-height: 550px;
        width: 50px;
    }

    #carouselExampleDark {
        z-index: -1;/* Esto colocará el carrusel detrás de otros elementos */
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

    /* Estilos CEFOT*/
    .titulo {
        position: relative;/* Establece el posicionamiento relativo */
        width: 100%;/* Establece el ancho al 100% del contenedor padre */
        height: 300px;/* Altura de la sección */
        background-image: url('{{ asset('assets/Conocedeit.png') }}');/* Establece la imagen de fondo */
        background-size: cover;/* Ajusta la imagen de fondo para cubrir todo el contenedor */
        background-position: center 10%;/* Centra la imagen de fondo */
        color: rgb(15, 17, 15);/* Color del texto */
        text-align: center;/* Alinea el texto al centro */
        padding-top: 150px;/* Espacio superior para centrar el texto verticalmente */

    }

    .titulo p {
        position: absolute;/* Establece el posicionamiento absoluto */
        top: 70%;/* Coloca el elemento en la mitad superior del contenedor */
        left: 50%;/* Coloca el elemento en la mitad izquierda del contenedor */
        transform: translate(-50%, -50%);/* Centra el elemento horizontal y verticalmente */
        font-size: 42px;/* Tamaño del texto */
    }
    section {
        padding: 10px; /* Relleno dentro de todas las secciones*/
        border: 1px solid #ffffff; /* Borde para todas las sec*/
        columns: 2;
    }

    #seccion1 {
        background-color: rgb(255, 255, 255);
        color: #333;
        padding: 20px;
        display: grid;
        margin: 0 40px;
        grid-template-columns: 1fr 2.5fr;
    }

    #seccion1 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }

    #seccion1 p {

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
        grid-template-columns: 1fr 2.5fr;
        position: relative;

    }

    #seccion2 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;

    }

    #seccion2 p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #seccion3 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
    }

    #seccion3 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;

    }

    #seccion3 p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #seccion4 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }

    #seccion4 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;

    }

    #seccion4 p {
        grid-column: 2/ span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #seccion4 a {
        grid-column: 2/ span 1;
        text-align: justify;
        font-size: 16px;


    }

    #seccion5 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }

    #seccion5 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;
    }

    #seccion5 p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #contenidoAdicional {
        grid-column: 2 / span 1;
        margin-top: 20px;
        padding: 15px;
    }

    #contenidoAdicional h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;
    }

    #contenidoAdicional p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    .boton {
        background: none;
        border: none;
        color: #0f0f16;
        text-decoration: underline;
    }

    #seccion6 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }

    #seccion6 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;

    }

    #seccion6 p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #seccion6 ul {
        grid-column: 2 / span 1;
        align-self: center;
        font-size: 16px;
        list-style-type: disc;
        margin-left: -20px;
    }

    #seccion7 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }

    #seccion7 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;

    }

    #seccion7 p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #seccion7 ul {
        grid-column: 2 / span 1;
        align-self: center;
        font-size: 16px;
        list-style-type: disc;
        margin-left: -20px;
    }

    #seccion8 {
        background-color: #ffffff;
        color: #333;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }

    #seccion8 h2 {
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color:  #094d2c;

    }

    #seccion8 p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }

    #seccion8 ul {
        grid-column: 2 / span 1;
        align-self: center;
        font-size: 16px;
        list-style-type: disc;
        margin-left: -20px;
    }

    /*Barra Lateral*/
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;

    }

    .container {
        display: flex;
        flex-grow: 1;
    }

    .sidebar {
        width: 250px;
        min-height: 39vh;
        color:  #094d2c;

        padding: 10px;
        border-radius: 0%;
        position: sticky;
        font-size: 20px;
        border-left: 1.5px solid transparent;
    }

    .sidebar::before {
        content: '';
        display: block;
        height: 100%;
        width: 1.5px;
        /* Ancho del resaltado en la parte izquierda */
        background-color: gray;
        /* Color del resaltado en la parte izquierda por defecto */
        position: absolute;
        left: 0;
        top: 0;
        transition: background-color 0.3s;
    }

    .sidebar a {
        display: block;
        color: rgb(255, 255, 255);
        text-decoration: none;
        margin-bottom: 10px;
        transition: background-color 0.3s;
        border-bottom: none;
        border-left: 1.5px solid transparent;
    }

    .sidebar a:hover {

        text-decoration: none;
        color: #f3f3f3;
        border-left-color: #000000;
    }

    .content {
        margin-left: 170px;
        /* Ancho de la barra lateral + espacio adicional */
        padding: 20px;
    }

    section {
        margin-bottom: 0px;
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
                <a href="{{ route('Convenios') }}">Convenios</a>
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
        <p style="color: #ffffff">Centro para el Desarrollo Integral y Tecnológico CEDEIT</p>
    </div>
    <div id="searchResults">
    <!-- Contenido principal de la página -->
    <section id="seccion1">
        <h2 style="color:  #094d2c;">Cedeit</h2>
        <div class="container">
            <nav class="sidebar">
                <a href="#seccion1">Quienes Somos</a>
                <a href="#seccion2">Misión</a>
                <a href="#seccion3">Visión</a>
                <a href="#seccion4">Organización Estructural</a>
                <a href="#seccion5">Principios Institucionales</a>
                <a href="#seccion6">Propuesta Interinstitucional</a>
                <a href="#seccion7">Sedes</a>
                <a href="#seccion8">Alcances del Convenio</a>
            </nav>
        </div>
        <div class="container">
            <p>CEDEIT
                Es una empresa dedicada a impulsar el desarrollo de proyectos de formación y educación en el
                nivel de técnicos laboral-profesional y superior: Pregrados: Tecnologías (a distancia y virtuales),
                licenciaturas (a distancia y virtuales), además de otras carreras profesionales. Posgrados:
                Especializaciones, maestrías y doctorados; así mismo, cursos, seminarios, diplomados y talleres,
                todo en el marco de la educación continua y con calidad académica y administrativa
                Toda esta labor, está dirigida a contribuir con la profesionalización de los docentes en formación
                a través de acciones autónomas profesionalmente elaboradas y soportadas en convenios
                interinstitucionales con instituciones educativas de educación superior regionales, nacionales e
                internacionales.
                <br>
                <br>
                Profesionalizar a los técnicos laborales que salen de convenios o alianzas de
                nuestra empresa en convenios con universidades reconocidas y previo convenio y llevar la
                educación profesional a toda una comunidad bachiller que le es imposible llegar a una universidad
                privada u oficial por la situación económica de trabajo que hoy afrontamos y aprovechar la
                tecnología que puede cambiar un estilo de vida.
                CEDEIT S.A.S. propende además por la innovación educativa y el fortalecimiento investigativo
                a nivel pedagógico, cuyos resultados y producción intelectual empieza a tomar forma a través de
                medios escritos (Revista Theoros, Pensar universitas ISSN 23900393).
            </p>
        </div>
    </section>
    <section id="seccion2">
        <h2>Misión</h2>
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
    </section>
    <section id="seccion3">
        <h2>Visión</h2>
        <p>EL CEDEIT S.A.S. para el 2023, será una empresa consolidada, acreditada y ampliamente
            reconocida a nivel nacional, por la prestación de servicios educativos y profesionales de alta
            calidad, mediante la implementación de sistemas integrados pertinentes, gestionados todo el
            tiempo, con miras a la satisfacción total de quienes nos permiten contribuir con su educación y
            formación profesional.
        </p>
    </section>
    <section id="seccion4">
        <h2>Organización Estructural</h2>
        <p>Organigrama Institucional </p>
        <a href="assets\ORGANIZACION INSTITUCIONAL.pdf">organigramaInstitucional.pdf</a>
    </section>
    <section id="seccion5">
        <h2>Elementos Que Carcaterizan El Funcionamiento De CEDEIT</h2>
        <p>EL CEDEIT S.A.S. Comprometido con el buen nombre y con el firme propósito de contribuir con sus
            procesos de alta calidad de su contraparte en este procedo de cooperación, de forma expresa señala a
            continuación los elementos con los que habrá de ofrecer de manera ética, honorable y siempre a la luz
            de la ley y de la dirección que orienten las diferentes universidades con la cual tiene convenio el CEDEIT,
            sus programas de pregrado y post grado que en la actualidad ofrece y aquellos que en el futuro y dentro
            de los tiempos de este convenio, llegue a ofertar.
            <br>
            <br>
            Así mismo y con el mismo talante, todo curso, taller,
            diplomado y asesoría educativa, que de forma autónoma proponga, siempre, bajo la tutela universitaria
            y con su certificación como respaldo, obviamente, una vez se haya demostrado la culminación de los
            tiempos y el alcance de los créditos académicos, que para el caso sean exigidos a sus estudiantes y futuros
            egresados.
            En esa línea, señalamos los elementos con los que estamos seguros de cumplir cabalmente con lo aquí
            pactado.
            <button class="boton" onclick="toggleContenido()">Leer Más</button>
        </p>
        <div id="contenidoAdicional" style="display: none;">
            <h2>Calidad</h2>
            <p>Es nuestra plataforma para consolidar nuestra empresa como la mejor del sur
                occidente colombiano, a la hora de ofertar de manera autónoma y convenida con
                instituciones de educación superior, las ofertas educativas en los distintos campos del
                saber, y especialmente en el educativo. Siendo respaldo en los procesos de certificación
                y de alta calidad de las instituciones que compartan de manera humana, este empeño
                interinstitucional.</p>
            <h2>Honestidad</h2>
            <p>Apegados siempre a la normatividad vigente que emana del MEN y de los
                convenios interinstitucionales firmados; pero más allá de eso, comprometidos con un
                servicio óptimo y con un alto sentido ético, social y altamente cualificado para nuestra
                nación. </p>

            <h2>Seriedad</h2>
            <p>Reflejada en nuestras acciones profesionales, cumpliendo a cabalidad con
                todos los compromisos adquiridos, siendo referentes de moral y de trabajo ético y, con la
                mirada siempre puesta en la construcción de un futuro mejor y más humano para los
                futuros profesionales de nuestra patria. </p>


            <h2>Responsabilidad</h2>
            <p>Cumpliendo profesionalmente con todo lo aquí pactado, pero muy
                especialmente con aquellos que han confiado a nuestra empresa, su futuro profesional y
                laboral, cumpliendo con todos los requisitos de ley que, en un tiempo éticamente
                delimitado, les habrá de permitir el consolidar sus sueños profesionales.
            </p>
            <h2>Talento Humano</h2>
            <p>El personal profesional y humano de CEDEIT S.A.S. está
                caracterizado por su alto nivel de competencia y formación profesional, acorde con las
                exigencias universitarias respecto a los docentes y al que exige nuestra empresa a los
                demás miembros, según las labores a desempeñar.
            </p>
        </div>
    </section>
    <section id="seccion6">
        <h2>Propuesta Interinstitucional</h2>
        <p>Conscientes del trabajo y del buen nombre del CEDEIT SAS bajo los convenios interinstitucionales se
            compromete con una labor altamente profesional, que dé cuenta de niveles de desarrollo en procesos
            incluyentes, innovadores, humanizadores, investigativos, de producción intelectual, de construcción de
            propuestas nuevas que vayan siempre, en pro del mejoramiento educativo y de la formación de alta
            calidad de sus egresados con valores cristianos y así contribuir a una sociedad más justa y sana
            convivencia; elementos que, sin duda, hacen parte de la misión y de la visión del CEDEIT.
        </p>
        <h2>Objetivo General</h2>
        <p> Establecer cooperación interinstitucional entre CEDEIT S.A.S. y la Secretaria de Educación Yumbo, con
            el propósito de fortalecer relaciones que contribuyan con la formación competente y humana de sus
            estudiantes. Todo bajo la supervisión de las diferentes universidades con las cuales tiene convenio el
            CEDEIT y en el marco de los estándares de calidad exigidos a ella.
        </p>
        <h2>Objetivo Especificos</h2>
        <ul>
            <li>Ofertar los programas de pregrado y de posgrado que ofrecen las diferentes universidades a Distancia y
                Virtuales.</li>
            <br>
            <li>Consolidar un proyecto de educación continuada, respecto a: asesorías educativas, talleres, diplomados y
                cursos que de manera autónoma que puede brindar CEDEIT S.A.S todo bajo la supervisión y la certificación
                de la Universidad que aplica.</li>
            <br>
            <li>Garantizar los procesos académicos y administrativos de formación, asegurando el buen nombre de la
                institución universitaria y cumpliendo con los estándares de calidad de la universidad.</li>
        </ul>
        <h2>Plazo o duracion</h2>
        <p>La cooperación interinstitucional se solicita por cinco años o más, según estudio técnico, a partir
            del perfeccionamiento de esta propuesta, con las firmas del representante legal del CEDEIT S.A.S.
            y de la Secretaría de educación Yumbo Valle, o quien esta designe para tal fin.
        </p>
        <h2>Oferta Educativa</h2>
        <ul>
            <h2 style="color: #094d2c; font-size: smaller; text-align: left;">UNIVERSIDAD DEL MADGDALENA</h2>
            <li> Profesional en Deporte a Distancia</li>
            <li> Tecnología en Educación Fisica Recreación y Deportes a Distancia</li>
            <li> licenciatura en Literatura y Lengua Castellana a Distancia</li>
            <li> Administración de la Seguridad y Salud en el Trabajo (Por ciclos propedéuticos)</li>
            <li> Administración Pública (Por ciclos propedéuticos)
            </li>
            <br>
            <h2 style="color:  #094d2c; font-size: smaller; text-align: left;">CORPORACION UNIVERSITARIA IBEROAMERICANA
            </h2>
            <li> Contaduria Pública</li>
            <li> Economia</li>
            <li> Negocios Internacionales</li>
            <li> Psicologia</li>
            <li> Ingenieria de Software</li>
            <li> Ingenieria Industrial</li>
            <li> Especialización en Gerencia de la Calidad en Salud </li>
            <li> Especialización en Gerencia de la Seguridad y Salud en el Trabajo </li>
            <li> Especialización en Gerencia de Proyectos</li>
            <li> Especialización en Gerencia Financiera</li>
            <li> Especialización en Gerencia del Comportamiento Organizacional</li>
            <li> Especialización en Neuropsicolgia de la Educación</li>
            <li> Especialización en Desarrollo Integral de la Infancia y la Adolecencia</li>
            <li> Maestria en Educación</li>
            <br>
            <h2 style="color:  #094d2c; font-size: smaller; text-align: left;">UNIVERSIDAD DE CARTAGENA</h2>
            <li> Maestria en Recursos Digitales Aplicados a la Educación (VIRTUAL) Universidad UDES </li>
            <li> Especialización en Aplicación de TIC para la Enseñanza (VIRTUAL)</li>
        </ul>
        <p>Teniendo en cuanta que todos son en metodología Vital y se acoge a la necesidad del momento
            despertando a la tecnología digital de un mundo ya cambiante y que necesita cualificar al ser humano
            en su entorno donde vive, trabaja o se desempeña como empleado y colocar al servicio de la sociedad
            un ser humano con valores cristianos, éticos morales e integrales
        </p>
    </section>
    <section id="seccion7">
        <div>
            <h2 style="margin-left: 450px;">Sedes</h2>
            <img src="assets/DSC_0045.JPG" alt="Imagen"
                style="float: right; margin-left: 450px; width: 500px; heigth 298px;" />
            <p style="margin-left: 450px; text-align: center;">Cra 9 # 25AN - 36  Tel: 3137631999 – 3176424746
                3127090035 Popayán-Cauca</p>
            <h2 style="margin-left: 450px;">Horario de atención</h2>
            <p style="margin-left: 380px; text-align: center;">Lunes a Viernes: 8:00 a.m. - a 12:00 p.m. y 2:00 p.m. - 6:00 p.m.</p>
            <ul style="margin-left: 370px; ">
                <h2 style="color:  #094d2c; font-size: 22px; ">Municipios Donde Se Hace Presencia</h2>
                <li> Popayán </li>
                <li> Cali </li>
                <li> Ibagué </li>
            </ul>
        </div>
    </section>
    <section id="seccion8">
        <h2>Alcances del Convenio</h2>
        <p>Los alcances de este convenio, más allá, de todos los enmarcados en la ley y en la buena voluntad de las
            partes para el buen funcionamiento de lo pactado y en bien de nuestros estudiantes, buscarán establecer
            pautas de trabajo mancomunado que nos permitan, la construcción de procesos de crecimiento
            interinstitucional de alto nivel, en los campos de investigación, de producción intelectual, de desarrollo
            humano, de inclusión, de innovación y de ampliación de cobertura, de las diferentes universidades
            en centros de extensión de los programas distancia y virtuales, de pregrado y de posgrado. Todos
            mediados por un excelso componente de calidad, en favor de nuestros formados y por supuesto, como
            soporte real y concreto a los procesos de certificación de calidad de ambas partes.</p>

        <h2 style="color:  #094d2c; font-size: 18px; text-align: left;">Beneficios a alcanzar</h2>
        <p>Derivados de los alcances, se pretenden para la sociedad, nuestros futuros profesionales y por supuesto,
            para las partes contractuales, los siguientes beneficios.
        </p>
        <ul>
            <li>Investigación pedagógica</li>
            <li>Desarrollo de propuestas educativas inéditas</li>
            <li>Producción intelectual y literaria</li>
            <li>Desarrollo Humano</li>
            <li>Inclusión</li>
            <li>Diversificación y reconocimiento contextual y geográfico</li>
            <li>Promoción y cuidado del componente cultural</li>
            <li>Innovación y desarrollo creativo</li>
            <li>Fortalecimiento al proceso de paz y al pos-conflicto</li>
            <li>Recuperación e integración del tejido social</li>
            <li>Inversión y desarrollo económico local</li>
            <li>Fortalecimiento económico para las partes.</li>
        </ul>
        <p>Teniendo en cuenta estudios de mercadeo, los distintos grupos poblaciones y las necesidades de
            formación académica en ciertas áreas en distintos lugares del país, EL CEDEIT S.A.S. tendrá como
            población objeto, aquellas personas que no pueden estudiar de manera presencial, ya sea por sus
            obligaciones laborales o familiares o espaciotemporales, propiciando espacios de formación académica
            mediante el uso de las TIC, sin debilitar los estándares de calidad y por el contrario, fomentando la
            accesibilidad de los colombianos a la educación superior, entre otros; la oferta académica está destinada
            a vincular a todo tipo de población que desee acceder a los programas académicos en las modalidad
            arriba señalada.
            <br>
            <br>
            Todo esto sin duda, se torna un gran aporte para el sostenimiento de una paz estable y duradera, apoyando
            a la población de contextos socioeconómicos debilitados y con población víctima de la violencia, mujeres
            cabeza de familia, indígenas, y afrodescendientes, por cuanto a dicha población también está dirigida la
            formación académica, a fin de lograr su crecimiento personal, intelectual, y por ende la proyección de
            mejores oportunidades laborales y de calidad de vida.
        </p>
    </section>
</div>
    <br>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="assets/Magdalena.jpg" width="124" height="75"
                        alt=""></a></li>
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
                <p>Correo: cetfot@gmail.com</p>
                <p>Licencia de funcionamiento: 20231700075094</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cedeit') }}">Quienes somos</a>
                <a href="#">Trabajos</a>
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
<script>
    function toggleContenido() {
        var contenidoAdicional = document.getElementById("contenidoAdicional");

        if (contenidoAdicional.style.display === "none") {
            contenidoAdicional.style.display = "block";
        } else {
            contenidoAdicional.style.display = "none";
        }
    }
</script>

</html>
