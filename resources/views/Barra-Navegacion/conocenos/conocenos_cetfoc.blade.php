<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
       /* Barra navegacion*/
    nav {
        background-color: rgb(13, 62, 187);
        overflow: auto;
        max-width: 960px;
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
        background-color: rgb(13, 62, 187);
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
        z-index: -1; /* Esto colocará el carrusel detrás de otros elementos */

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
       border-radius: 0px;
       margin-left: 70px;


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
        background-color: rgb(24, 66, 174);
    }
    .menu-vertical{
        position: absolute;
        display: none;
        list-style: none;
        width: 212px;
        background-color:  rgb(5, 46, 148);
    }
    .menu-horizontal li:hover .menu-vertical{
        display: block;

    }
    .menu-vertical li:hover{
        text-align: left;
        background-color: rgb(97, 127, 202);
    }

    .menu-vertical li a{
        display: block;
        color: white;
        text-decoration: none;
        padding: 5px;
    }
          /* Estilos CEFOT*/
          .titulo {
    position: relative; /* Establece el posicionamiento relativo para que los elementos absolutos se posicionen dentro de este contenedor */
    width: 100%; /* Establece el ancho al 100% del contenedor padre */
    height: 300px; /* Altura de la sección */
    background-image: url('/assets/conocenoscetfoc.png'); /* Establece la imagen de fondo */
    background-size: cover; /* Ajusta la imagen de fondo para cubrir todo el contenedor */
    background-position:  center 10%; /* Centra la imagen de fondo */
    color: rgb(255, 255, 255); /* Color del texto */
    text-align: center; /* Alinea el texto al centro */
    padding-top: 150px; /* Espacio superior para centrar el texto verticalmente */

}

.titulo p {
    position: absolute; /* Establece el posicionamiento absoluto */
    top: 70%; /* Coloca el elemento en la mitad superior del contenedor */
    left: 50%; /* Coloca el elemento en la mitad izquierda del contenedor */
    transform: translate(-50%, -50%); /* Centra el elemento horizontal y verticalmente */
    font-size: 42px; /* Tamaño del texto */
}
        /* Estilos CEFOT*/
    /*.titulo{
     padding: 50px;
     background-color: rgb(56, 98, 205);
     font-family: 'Open Sans', sans-serif;
     font-size: 42px;
     align-self: center;
     text-align: center;
    }*/
    section {
     padding: 10px; /* Relleno dentro de todas las secciones*/
     border: 1px solid #ffffff; /* Borde para todas las sec*/
     columns: 2;
    }
    #seccion1 {
        background-color: #ffffff;
        color: rgb(13, 62, 187);;
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
    }
    #seccion1 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }
    #seccion1 p{

        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;

    }
    #seccion2 {
        background-color: #ffffff;
        color: rgb(13, 62, 187);
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
    }
    #seccion2 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }
    #seccion2 p{
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }
    #seccion3 {
        background-color: #ffffff;
        color:rgb(13, 62, 187);
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
    }
    #seccion3 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }
    #seccion3 p{
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }
    #seccion4 {
        background-color:#ffffff;
        color: rgb(13, 62, 187);
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }
    #seccion4 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }
    #seccion4 p{
        grid-column: 2/ span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
    }
    #seccion5 {
        background-color: #ffffff;
        color: rgb(13, 62, 187);
        padding: 20px;
        margin: 0 40px;
        display: grid;
        grid-template-columns: 1fr 2.5fr;
        gap: 20px;
    }
    #seccion5 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
    }
    #seccion5 p{
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
        color:  rgb(6, 22, 63);
    }
    .boton {
        background: none;
        border: none;
        color: #0f0f16; /* Puedes ajustar el color a tu preferencia */
        text-decoration: underline;
    }

    #contenidoAdicional p {
        grid-column: 2 / span 1;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #5e5d5d;
        margin-bottom: 20px;
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
    #seccion6 h2{
        grid-column: 2 / span 1;
        align-self: center;
        text-align: center;
        color: rgb(13, 62, 187);
    }
    #seccion6 p{
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
          margin-left: -20px; /* Ajusta el margen izquierdo según tu preferencia */
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
        background-color: rgb(255, 255, 255);
        color: #fff;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 0%;
        position: sticky;
        font-size: 20px;
        border-left: 1.5px solid transparent;
    }
    .sidebar::before {
    content: '';
    display: block;
    height: 100%;
    width: 1.5px; /* Ancho del resaltado en la parte izquierda */
    background-color: gray; /* Color del resaltado en la parte izquierda por defecto */
    position: absolute;
    left: 0;
    top: 0;
    transition: background-color 0.3s;
}

    .sidebar a {
        display: block;
        color: rgb(13, 62, 187);
        text-decoration: none;
        margin-bottom: 10px;
        transition: background-color 0.3s;
        border-bottom: none;
        border-left: 1.5px solid transparent;
    }

    .sidebar a:hover {
        background-color: #ffffff;
        text-decoration: none;
        color:rgb(4, 4, 131);
        border-left-color: #1834c0;
    }

    .content {
        margin-left: 170px; /* Ancho de la barra lateral + espacio adicional */
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...tu-integridad-aqui..." crossorigin="anonymous" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <li><a href="#seccion1">Filosofia Institucional</a></li>
                    <li><a href="#seccion2">Misión</a></li>
                    <li><a href="#seccion3">Visión</a></li>
                    <li><a href="#seccion4">Principios Institucionales</a></li>
                    <li><a href="#seccion5">Simbolos Institucionales</a></li>
                    <li><a href="#seccion6">Sedes</a></li>
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
            <form id="searchForm" >
                <input type="text" id="searchInput" placeholder="Buscar...">
                <button type="button" onclick="search()" class="fa fa-search"></button>
            </form>
        </ul>
    </nav>
    <div class="titulo">
        <p>Centro de Estudios Técnicos y Formación Continua CETFOC</p>
    </div>
    <div id="searchResults">
    <!-- Contenido principal de la página -->
    <section id="seccion1">
        <h2>Cetfoc</h2>
        <div class="container">
                <nav class="sidebar">
                    <a href="#seccion1">Filosofia Institucional</a>
                    <a href="#seccion2">Misión</a>
                    <a href="#seccion3">Visión</a>
                    <a href="#seccion4">Principios Institucionales</a>
                    <a href="#seccion5">Simbolos Institucionales</a>
                    <a href="#seccion6">Sedes</a>
                </nav>
        </div>
        <p>El Centro de Estudios Técnicos y Formación Continua CETFOC comprende
            que la construcción de un tejido social sólido requiere enfocar los
            procesos educativos en procesos de educación integral oportunos con
            razón del contexto. Así mismo, esta se convierte en uno de los caminos
            más eficientes para lograr superar las brechas educativas, culturales,
            de competitividad e igualdad de oportunidades que limitan el desarrollo
            social entorpeciendo enormemente, la calidad educativa y la productividad
            de la región.
            <br>
            <br>
            En concordancia con ello, para CETFOC es fundamental generar
            espacios en donde la reflexión sobre el entorno y la incidencia del hombre
            sobre el mismo, sean una base y fundamento visible para la oferta de programas
            técnicos laborales sustentados heurísticamente equilibrando eficientemente,
            el aprender a aprender, el aprender a hacer y el aprender a ser como eje de
            una formación por competencias pertinente.
            CETFOC reconoce que: la instrucción y la práctica son fundamentales para lograr
            procesos formativos coherentes con las necesidades humanas y las necesidades
            del sector productivo. Siendo necesario mantener los principios básicos de la
            formación basada en competencias y el desarrollo integral reconociendo el SER,
            el HACER, y el SABER cómo base fundamental del CONVIVIR así, lograr influir
            y TRANSFORMAR el entorno para un mejor VIVIR.
        </p>
    </section>
    <section id="seccion2">
        <h2>Misión</h2>
        <p>El Centro de Estudios Técnicos y Formación Continua CETFOC es una institución en donde
            se trabaja para brindar formación técnica laboral integral con un enfoque de competencias.
            empoderando a nuestros aprendices con valores de autogestión que les permitan ser parte
            activa de su proceso de formación, para que sean capaces de propiciar e influir en
            el desarrollo y la transformación de su región. Con una metodología teórico-práctica
            que garantiza el cumplimiento de los procesos estructurados de gestión del conocimiento
            y la calidad, articulando los, tras adquirir los conocimientos académicos, las destrezas
            y, con ello, desarrollar las competencias laborales pertinentes acordes con los
            requerimientos del mercado laboral y el entorno social.
            Además de las competencias laborales, propias de cada programa de formación- CETFOC forma
            a sus aprendices para desenvolverse con eficiencia y oportunidad en un mundo laboral altamente competitivo,
            empoderándolo en sus habilidades y destreza para gestionar los recursos disponibles y aportar a una cultura
            de emprendimiento solida que sea congruente con la cultura ambiental propuesta por
            el Centro.</p>
    </section>
    <section id="seccion3">
        <h2>Visión</h2>
        <p>En el 2028 El CENTRO DE ESTUDIOS TÉCNICOS Y FORMACIÓN CONTINUA -
            CETFOC será una institución acreditada en alta calidad, reconocida
            por brindar una oferta académica pertinente que permita formar integralmente
            al individuo empoderándolo de sus competencias intrínsecas y preparándolo para
            la adquisición de nuevas, que le permitan aportar al campo laboral personas eficientes
            e innovadoras, garantizando estándares de calidad y principios de compromiso,
            transparencia, honestidad y servicio social.</p>
    </section>
    <section id="seccion4">
        <h2>Principios Institucionales</h2>
        <h2>Formacion Integral</h2>
        <p>El Centro de Estudios Técnicos y Formación Continua CETFOC toma fundamento en un proceso de formación integral para el desarrollo de las competencias laborales, tal como se orienta en el PEI de la ETDH. Desarrollando procesos de capacitación armónicos que vinculen el Saber, el Hacer y el Ser con miras a que los aprendices de la institución convivan eficientemente con el entorno y con sus pares.
            Se incluye dentro de la formación integral, una mirada a formar a la persona para que sea autónomo en su formación, reconociendo que a lo largo de toda su vida se acumularán saberes, conocimientos y experiencias. Bajo este principio, se asume además que las habilidades y destrezas pueden ser adquiridas por el aprendiz de forma formal o informal permitiéndole fortalecer y adquirir competencias que posibilitan su inserción laboral y a su vez, una mejora en su calidad de vida.
            <button class="boton"  onclick="toggleContenido()">Leer Más</button>
        </p>
        <div id="contenidoAdicional" style="display: none;">
            <h2>Flexibilidad</h2>
            <p>CETFOC diseñará los programas Técnicos laborales o de conocimientos académicos, con amplia disposición para adaptarse a los requerimientos del contexto social y productivo siempre respondiendo a las necesidades y características de su naturaleza cambiante.  </p>
            <h2>Flexibilidad</h2>
            <p>CETFOC diseñará los programas Técnicos laborales o de conocimientos académicos, con amplia disposición para adaptarse a los requerimientos del contexto social y productivo siempre respondiendo a las necesidades y características de su naturaleza cambiante. </p>

            <h2>Espiritu Investigativo e Innovación</h2>
            <p>Se propenderá por la formación de personas con alta capacidad de análisis, identificación y resolución de problemas, dentro de la sociedad a la cual pertenece y en la cual convive cotidianamente con miras a fundamentar y transformar su realidad social, es decir, un individuo capaz de desempeñarse en cualquier rol con alto criterio ético y laboral. </p>


            <h2>Equidad e Inclusión</h2>
            <p>La equidad se refleja en el objetivo de la educación para el trabajo y el desarrollo humano enmarcando las acciones formativas en el respeto a las diferencias y al principio de respeto del derecho, la perspectiva de género, credo y la identidad cultural, sin llegar a hacer distinción alguna por los factores antes mencionados u otros como la procedencia étnica o socioeconómica.
                Se entiende que todos los aprendices serán tratados como iguales sin discriminación alguna, salvo cuando las condiciones de uno o varios de ellos precisen adaptaciones curriculares para garantizar los derechos de accesibilidad y permanencia dentro del programa de formación de su interés.
            </p>
            <h2>Cooperción</h2>
             <p>CETFOC propenderá por mantener una oferta que integre los diferentes tipos de instrucciones propios del renglón productivo al cual enfoca su oferta. Del mismo modo buscará mantener coherencia con el sistema nacional de cualificaciones.
                La promoción y el respeto de la divergencia en el pensamiento direccionan las acciones educativas para el trabajo y el desarrollo humano de tal forma que se desarrolle la capacidad crítica del aprendiz para que así, comprenda e influya en su realidad. Al mismo tiempo, que se logre la comprensión de la condición gregaria del ser humano para lo cual es indispensable el trabajo en equipo armónico.
            </p>
            <h2>Emprendimiento</h2>
            <p>La instrucción del aprendiz vinculará como parte fundamental los saberes previos como una fuente de saberes que lo hace capaz de innovar nocimientos y técnicas, que benefician el avance científico y tecnológico de su comunidad utilizando el aprendizaje significativo el cual le permitirá desarrollarse en su realidad social.</p>
            <h2>Eficiencia y Eficacia</h2>
            <p>Ser competente implica el aprender a gestionar los recursos de forma eficiente y eficaz para lo cual CETFOC centra su formacion laboral en principios y estandares claros de calidad. Fundamentandolos en la gestion de procesos y la gestion integral del conocimiento.</p>
        </div>
    </section>
    <section id="seccion5">
        <h2>Simbolos Institucionales</h2>
        <h2>Nuestra Bandera</h2>
        <p>La bandera Del Centro de Estudios Técnicos y Formación Continua CETFOC consta de tres franjas de igual tamaño ubicadas de forma horizontal. La franja superior y la franja inferior de color azul y la central de color blanco. En el centro de la bandera se encuentra la base del logo de CEDEIT formando un engranaje.
            La franja superior, representa la confiabilidad de la institución. Mostrándola como una entidad seria y comprometida con el desarrollo integral de los aprendices. La franja central de color blanca representa la paz y las trasparencias de los procesos institucionales.
            <br>
            <br>
            Del mismo modo el color blanco como color neutral, engloba las competencias y su diversidad conjugadas en la integralidad del ser humano. Por último, la franja inferior de color azul representa el espíritu reflexivo que forja los conocimientos.
            En última instancia, el centro de la bandera conformado por una circunferencia blanca vuelve hacer alusión a la integralidad del ser humano y el logo de CEDEIT que conserva su significado representando las diferentes ciencias. Toma forma de engranaje para hacer referencia a la condición gregaria del ser humano y a su necesidad de cooperar y trabajar en equipo para transformar la sociedad y el entorno circundante.
        </p>
        <h2>Nuestro Escudo</h2>
        <p>En el escudo predominan los colores azul y blanco, los colores institucionales como símbolo de confianza y trasparencia, como también de la calidad en los procesos.
            En los laterales del escudo se encuentran dos pilares de mármol que representan la estabilidad y la solidez de los conocimientos impartidos en cada uno de los programas de formación. En la cima de estos se encuentran dos plantas florecidas simbolizando la importancia de tener bases sólidas para lograr cosechar los frutos del esfuerzo.
            En la parte superior se ubica la sigla de la institución y en la parte inferior el nombre completo. El centro del escudo de color blanco dividido en tres partes representa: parte superior (libro y pluma), el saber y los conocimientos necesarios para adquirir aptitud en cualquier oficio, parte izquierda (antorcha), representa el hacer y la pasión con la que se deben asumir los retos.
            <br>
            <br>
            El fuego es tomado como símbolo de la forja para hacer alusión de que solo actuando con convicción, constancia y entrega se logra transformar el entorno, y la parte derecha (el pensador de Rodín Auguste), representa el ser y el carácter reflexivo. Del mismo modo encierra en sí mismo los principios institucionales los cuales direccionan el accionar y los procesos de CETFOC.
            <br>
            <br>
            La parte central representa las diferentes ciencias y los campos de formación respectivos. El color verde: representa las ciencias naturales y el medio ambiente, el color azul claro representa las ciencias humanas, el color azul oscuro representa las ciencias de la salud, el color naranja representa las ciencias exactas y las matemáticas, el amarillo representa las ciencias administrativas y económicas y el gris, representa las ingenierías y ciencias tecnológicas. En el centro, encerrado por las ciencias encontramos un árbol que simboliza el conocimiento, las artes y oficios empíricos que dan origen a nuevos conocimientos. Al mismo tiempo que simboliza la capacidad de investigación e interacción
        </p>
    </section>
    <section id="seccion6">
        <h2>Sedes</h2>
        <img src="" alt="">
        <p>Cra 9 # 25AN - 36 Tel: 3137631999 – 3176424746 - 3127090035
            Popayán-Cauca
        </p>
        <h2>Horario de atención</h2>
        <p>Lunes a Viernes: 8:00 a.m. - a 12:00 p.m. y 2:00 p.m. - 6:00 p.m.</p>
        <ul>
            <h2 style="color: rgb(13, 62, 187); font-size: 16px; text-align: left;">MUNICIPOS DONDE SE HACE PRESENCIA</h2>
            <li> Popayán </li>
            <li> Cali </li>
            <li> Ibagué </li>
        </ul>
    </section>
    <br>
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
                <p>Correo: cetfot@gmail.com</p>
                <p>Licencia de funcionamiento: 20231700075094</p>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="{{ route('conocenos_cetfoc') }}#seccion1">Quienes somos</a>
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
