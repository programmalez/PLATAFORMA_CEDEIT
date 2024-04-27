<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
            /* Barra navegacion*/
        nav {
            background-color: rgb(6, 22, 63);
            overflow: auto;
            max-width: 890px;
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
           border-radius: 100px;
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
            background-color: rgb(12, 73, 230);
        }

        .menu-vertical li a{
            display: block;
            color: white;
            text-decoration: none;
            padding: 5px;
        }
            /* Estilos Impacto*/
                  /* Estilos CEFOT*/
       .titulo {
    position: relative; /* Establece el posicionamiento relativo para que los elementos absolutos se posicionen dentro de este contenedor */
    width: 100%; /* Establece el ancho al 100% del contenedor padre */
    height: 300px; /* Altura de la sección */
    background-image: url('/assets/Conoimpacto.png'); /* Establece la imagen de fondo */
    background-size: cover; /* Ajusta la imagen de fondo para cubrir todo el contenedor */
    background-position:  center 50%; /* Centra la imagen de fondo */
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
        /*.titulo{
         padding: 50px;
         background-color: rgb(133, 127, 35);
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
            color:  rgb(6, 22, 63);
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
            background-color:  #ffffff;;
            color: rgb(6, 22, 63);
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
            color: rgb(6, 22, 63);
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
            background-color: #ffffff;;
            color:  rgb(6, 22, 63);
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
        #seccion5 {
        background-color: #ffffff;
        color:  rgb(6, 22, 63);
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
            color:  rgb(6, 22, 63);
        }
        #seccion5 p{
            grid-column: 2 / span 1;
            text-align: justify;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            color: #5e5d5d;
            margin-bottom: 20px;
        }
        #seccion5 ul {
              grid-column: 2 / span 1;
              align-self: center;
              color: #5e5d5d;
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
             min-height: 30vh;
             background-color: rgb(255, 255, 255);
             color: #fff;
             padding: 10px;
             border-radius: 0%;
             box-sizing: border-box;
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
             color:rgb(6, 22, 63);
             text-decoration: none;
             margin-bottom: 10px;
             transition: background-color 0.3s;
             border-bottom: none;
         }

         .sidebar a:hover {
             background-color: #ffffff;
             text-decoration: none;
             color: rgb(13, 49, 139);
             border-left-color: #041153;
         }

         .content {
             margin-left: 170px; /* Ancho de la barra lateral + espacio adicional */
             padding: 20px;
         }

         section {
             margin-bottom: 0px;
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
    <link rel="stylesheet" href="{{ asset('assets/whatsapp/css/fontello.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="home"><i class="fa fa-home"></i></a></li>
            <li><a href="Impacto">Inicio</a></li>
            <li>
                <a href="conocenos_impacto">Conocenos</a>
                <ul class="menu-vertical">
                     <li><a href="#seccion1">Filosofia Institucional</a></li>
                     <li><a href="#seccion2">Misión</a></li>
                     <li><a href="#seccion3">Visión</a></li>
                     <li><a href="#seccion4">Principios Institucionales</a></li>
                     <li><a href="#seccion5">Sedes</a></li>
                </ul>
            </li>
            <li>
                <a href="Rimpacto">Admisiones</a>
                <ul class="menu-vertical">
                    <li><a href="Rimpacto">Procesos y requisitos para Estudiantes</a></li>
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
    <div class="titulo">
        <p>Somos IMPACTO AL MUNDO</p>
    </div>
    <!-- Contenido principal de la página -->
    <section id="seccion1">
        <h2>Impacto al mundo</h2>
        <div class="container">
            <nav class="sidebar">
                <a href="#seccion1">Filosofia Institucional</a>
                <a href="#seccion2">Misión</a>
                <a href="#seccion3">Visión</a>
                <a href="#seccion4">Principios Institucionales</a>
                <a href="#seccion5">Sedes</a>
            </nav>
        </div>
        <p>El INSTITUTO TÉCNICO IMPACTO AL MUNDO comprende que la construcción de un tejido social sólido requiere enfocar los procesos educativos en procesos de formación integral. Así mismo, esta se convierte en uno de los caminos más eficientes para lograr superar las brechas educativas y culturales, que limitan el desarrollo social entorpeciendo enormemente la calidad educativa de la región. En concordancia con ello, para El INSTITUTO TÉCNICO IMPACTO AL MUNDO es fundamental generar espacios en donde la reflexión sobre el entorno y la incidencia del hombre sobre el mismo, sean una base y fundamento visible para la oferta de programas técnicos laborales sustentados heurísticamente equilibrando eficiencia y pertinencia.
            La instrucción y la práctica son fundamentales para lograr procesos formativos coherentes con las necesidades humanas y las necesidades del sector productivo, para lo cual es necesario reconocer y mantener los principios básicos de la formación basada en competencias y el desarrollo integral reconociendo el SER, el HACER, y el SABER cómo base fundamental del CONVIVIR así, lograr influir y transformar el entorno para un mejor VIVIR.
        </p>
    </section>
    <section id="seccion2">
        <h2>Misión</h2>
        <p>EL INSTITUTO TÉCNICO IMPACTO AL MUNDO es una institución educativa que trabaja para brindar formación técnica bajo la luz del modelo de competencias laborales, formando al individuo con una metodología teórico-práctica que garantice la adquisición, desarrollo y perfeccionamiento de dichas competencias desde la integralidad, a través de procesos estructurados de gestión del conocimiento y gestión de la calidad. Los cuales permiten que, tras adquirir los conocimientos académicos y prácticos necesarios y acordes con los requerimientos del sector productivo, se logre la inserción laboral de quienes egresan de los diferentes programas técnicos.
            Además, se busca empoderar a nuestros aprendices con valores de autogestión, emprendimiento y liderazgo que les permitan ser parte activa de su proceso de formación, logrando que sean capaces de propiciar e influir en el desarrollo y la transformación de su entorno.
        </p>
    </section>
    <section id="seccion3">
        <h2>Visión</h2>
        <p>En el 2028 EL INSTITUTO TÉCNICO IMPACTO AL MUNDO se habrá posicionado como una institución promotora del emprendimiento social, reconocida por brindar una oferta académica pertinente que permita formar integralmente al individuo empoderándolo de sus competencias intrínsecas y preparándolo para la adquisición de nuevas que permitan aportar al campo laboral y al desarrollo social y cultural de su región.</p>
    </section>
    <section id="seccion4">
        <h2>Principios Institucionales</h2>
            <h2>Formacion Integral</h2>
            <p>El Instituto Técnico Impacto Al Mundo toma fundamento en un proceso de formación integral para el desarrollo de las competencias laborales. Desarrollando procesos de capacitación armónicos que vinculen el Saber, el Hacer y el Ser con miras a que los aprendices de la institución convivan eficientemente con el entorno y con sus pares académicos o laborales.
               Es fundamental tomar en cuenta la formación en valores como parte de la integralidad de los aprendices del plantel. Ya que no solo se busca formar profesionistas o hacedores sino, seres integrales capaces de transformar su entorno desde su oficio, destacándose por un excelente don de gente y un desempeño laboral de alta calidad.
            <button class="boton"  onclick="toggleContenido()">Leer Más</button>
            </p>
        <div id="contenidoAdicional" style="display: none;">
            <h2>Liderazgo</h2>
            <p>Con miras en el desarrollo de los procesos sociales, el respeto a la propia persona y al otro, se fomenta en los aprendices el desarrollo de competencias y el pensamiento propio de los líderes y gestores sociales. Siendo parte fundamental del trabajo institucional el influenciar y transformar el entorno en donde nuestros aprendices y egresados desarrollen su cotidianidad.  </p>
            <h2>AutoGestión</h2>
            <p>Es fundamental dentro de los procesos de formación del Instituto lograr que el aprendiz se apropie de su propio proceso de formación. Incitándole a que indague e investigue para lograr que su proceso de cualificación sea más eficiente. Del mismo modo, es importante que el aprendiz conozca sus propias potencialidades y sea capaz de ponerlas en práctica con el fin de perfeccionar sus competencias. </p>
            <h2>Constructivismo</h2>
            <p>Promover en el aprendiz capacidades que le permitan sentirse capaz de innovar conocimientos y técnicas que benefician el avance científico y tecnológico de su comunidad utilizando el aprendizaje significativo el cual le permitirá desarrollarse en su realidad social.  </p>
            <h2>Equidad e Inclusión</h2>
            <p> La equidad se refleja en el objetivo de la educación para el trabajo y el desarrollo humano enmarcando las acciones formativas en el respeto a las diferencias y al principio de respeto del derecho, la perspectiva de género, credo y la identidad cultural.
               Se entiende que todos los aprendices serán tratados como iguales sin discriminación alguna, salvo cuando las condiciones de uno o varios de ellos precisen adaptaciones curriculares para garantizar los derechos de accesibilidad.
            </p>
            <h2>Cooperción</h2>
            <p>La promoción y el respeto de la divergencia en el pensamiento direccionan las acciones educativas para el trabajo y el desarrollo humano de tal forma que se desarrolle la capacidad crítica del aprendiz para que así, comprenda e influya en su realidad. Al mismo tiempo, que se logre la comprensión de la condición gregaria del ser humano para lo cual es indispensable el trabajo en equipo armónico.
            </p>
            <h2>Emprendimiento</h2>
            <p>Más allá de solo aportar a la construcción de una cultura de emprendimiento es un compromiso institucional, promover los emprendimientos sociales que sean respondientes a fortalecer el “ser” de nuestros aprendices a través del “saber cómo” aplicar sus competencias para influir y transformar su entorno. </p>
            <h2>Respeto y Honestidad</h2>
            <p>Dentro de la sociedad a la cual pertenece y en la cual convive cotidianamente con miras a fundamentar su realidad social, es decir, un individuo capaz de desempeñarse en cualquier rol con alto criterio ético y laboral. </p>
            <h2>Eficiencia y Eficacia</h2>
            <p>Ser competente implica el aprender a gestionar los recursos de forma eficiente y eficaz para lo cual INSTITUTO TÉCNICO IMPACTO AL MUNDO centra su formación laboral en principios y estándares claros de calidad. Fundamentándolos en la gestión de procesos y la gestión integral del conocimiento.</p>
        </div>
    </section>
    <section id="seccion5">
        <h2>Sedes</h2>
        <img src="" alt="">
        <p>Cra 9 # 25AN - 36 Tel: 3137631999 – 3176424746 - 3127090035
            Popayán-Cauca
        </p>
        <h2>Horario de atención</h2>
        <p>Lunes a Viernes: 8:00 a.m. - a 12:00 p.m. y 2:00 p.m. - 6:00 p.m.</p>
        <ul>
            <h2 style="color:  rgb(6, 22, 63); font-size: 16px; text-align: left;">MUNICIPOS DONDE SE HACE PRESENCIA</h2>
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
            <img src="assets/impacto.jpeg" alt="">
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
