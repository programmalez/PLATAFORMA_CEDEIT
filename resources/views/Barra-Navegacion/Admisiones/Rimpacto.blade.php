<!DOCTYPE html>
<html lang="es">
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #3498db;
    }
    ul {
      list-style-type: none;
      padding: 0;
    }
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
<link rel="stylesheet" href="{{ asset('assets/whatsapp/css/fontello.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
  <title>Requisitos de Inscripción</title>
</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="home"><i class="fa fa-home"></i></a></li>
            <li><a href="Impacto">Inicio</a></li>
            <li>
                <a href="conocenos_impacto">Conocenos</a>
                <ul class="menu-vertical">
                    <li><a href="{{ route('conocenos_impacto') }}#seccion1">Filosofia Institucional</a></li>
                    <li><a href="{{ route('conocenos_impacto') }}#seccion2">Mision</a></li>
                    <li><a href="{{ route('conocenos_impacto') }}#seccion3">Vision</a></li>
                    <li><a href="{{ route('conocenos_impacto') }}#seccion4">Principios Institucionales</a></li>
                    <li><a href="{{ route('conocenos_impacto') }}#seccion5">Sedes</a></li>
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
    <div class="container">
        <h1>Requisitos de Inscripción</h1>
        <ul>
            <li>Fotocopia de cédula al 150% ampliada.</li>
            <li>Diploma y acta de grado de bachiller.</li>
            <li>Dos fotos 3x4 con fondo azul.</li>
            <li>Recibo de servicio público.</li>
        </ul>
        <!-- Botón de Suscripción -->
        <button type="button" class="btn btn-secondary ml-5" style="width: 250px;" data-toggle="modal" data-target="#suscripcionModal">
            Formulario de Matricula
        </button>
        <!-- Modal de Suscripción -->
        <div class="modal fade" id="suscripcionModal" tabindex="-1" role="dialog" aria-labelledby="suscripcionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="suscripcionModalLabel">Formulario de Matricula</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formularioInscripcion"  action="{{ route('matrimpacto') }}" method="post">
                            @csrf
                            <!-- Etapa 1: Datos personales -->
                            <div id="datosPersonales">
                                <p>DATOS PERSONALES (Parte 1 del formulario).</p>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="nombres1">Primer Nombre:*</label>
                                        <input type="text" class="form-control" id="nombres1" name="nombres1" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nombres2">Segundo Nombre:</label>
                                        <input type="text" class="form-control" id="nombres2" name="nombres2" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="apellido1">Primer Apellido:*</label>
                                        <input type="text" class="form-control" id="apellido1" name="apellido1" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="apellido2">Segundo Apellido:</label>
                                        <input type="text" class="form-control" id="apellido2" name="apellido2" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="identificacion">Tipo de documento:</label>
                                            <select id="identificacion" name="identificacion" style="width: 190px; height: 40px; border: 1px solid #d7d3d3; border-radius:5px;">
                                                <option value="" disabled selected>Seleccione Documento</option>
                                                <option value="cedulaCiudadania">CEDULA DE CIUDADANIA</option>
                                                <option value="cedulaExtranjeria">CEDULA DE EXTRANJERIA</option>
                                                <option value="pasaporte">PASAPORTE</option>
                                                <option value="tarjetaIdentidad">TARJETA DE IDENTIDAD</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="documento">Número documento:</label>
                                            <input type="number" class="form-control ml-2" id="documento" name="documento" style="width: 180px;"  placeholder="Numero" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="lugarexpe">Lugar de Expedición :*</label>
                                            <input type="text" class="form-control" id="lugarexpe" name="lugarexpe" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fechaexpe">Fecha de Expedición:*</label>
                                            <input type="date" class="form-control" id="fechaexpe" name="fechaexpe" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nacimiento">Lugar de nacimiento:*</label>
                                        <input type="text" class="form-control" id="nacimiento" name="nacimiento" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nacifecha">Fecha de Nacimiento:*</label>
                                        <input type="date" class="form-control" id="nacifecha" name="nacifecha" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="documento">Edad:</label>
                                        <input type="number" class="form-control ml-2" id="edad" name="edad" style="width: 230px;"  placeholder="Edad" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Estado Civil:*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="soltero" name="soltero" value="true">
                                            <label class="form-check-label" for="desvinculadosSi">Soltero</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="casado" name="casado" value="false">
                                            <label class="form-check-label" for="casado">Casado</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="otro" name="otro" value="false">
                                            <label class="form-check-label" for="otro">Otro</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="direccion">Direccion Actual:</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion"  placeholder="direccion" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="municipio">Municipio:*</label>
                                        <input type="text" class="form-control" id="municipio" name="municipio" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="departamento">Departamento:</label>
                                        <input type="text" class="form-control" id="departamento" name="departamento" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="celular1">Telefono Celular 1:</label>
                                        <input type="number" class="form-control" id="celular1" name="celular1"  placeholder="Celular" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="celular2">Telefono Celular 2:</label>
                                        <input type="text" class="form-control" id="celular2" name="celular2"  placeholder="Celular" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="correo">Correo:</label>
                                        <input type="text" class="form-control" id="correo" name="correo" style="width: 470px;" placeholder="Correo Electronico" required>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-continuar">Continuar</button>
                            </div>
                            <!-- Etapa 2: Víctimas del conflicto y población a la que pertenece -->
                            <div id="victimasDelConflicto" style="display: none;">
                                <p>VÍCTIMAS DEL CONFLICTO (Parte 2 del formulario).</p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>En Situación de Desplazamiento:*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="desplazamientoSi" name="desplazamiento" value="true">
                                            <label class="form-check-label" for="desplazamientoSi">Sí</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="desplazamientoNo" name="desplazamiento" value="false">
                                            <label class="form-check-label" for="desplazamientoNo">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Desvinculados De Grupos Al Margen De La Ley:*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="desvinculadosSi" name="desvinculados" value="true">
                                            <label class="form-check-label" for="desvinculadosSi">Sí</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="desvinculadosNo" name="desvinculados" value="false">
                                            <label class="form-check-label" for="desvinculadosNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="expulsor">Municipio Expulsor:</label>
                                    <input type="text" class="form-control" id="expulsor" name="expulsor"  placeholder="Municipio Expulsor" required>
                                </div>
                                <p>POBLACION A LA QUE PERTENECE</p>
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="raizales" name="raizales">
                                        <label class="form-check-label" for="raizales">Raizales</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="afrocolombianos" name="afrocolombianos">
                                        <label class="form-check-label" for="afrocolombianos">Afrocolombianos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="indigenas" name="indigenas">
                                        <label class="form-check-label" for="indigenas">Indígenas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rom" name="rom">
                                        <label class="form-check-label" for="rom">Rom</label>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" onclick="showForm('datosPersonales')">Atrás</button>
                                <button type="button" class="btn btn-primary btn-continuar">Continuar</button>
                            </div>
                            <!-- Etapa 3: Limitaciones o capacidades excepcionales -->
                            <div id="limitacionesCapacidades" style="display: none;">
                                <p>LIMITACIONES O CAPACIDADES EXCEPCIONALES (Parte 3 del formulario).</p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Fisica:*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="fisicaSi" name="fisica" value="true">
                                            <label class="form-check-label" for="desplazamientoSi">Sí</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="fisicaNo" name="fisica" value="false">
                                            <label class="form-check-label" for="desplazamientoNo">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="describa">Describa:</label>
                                        <input type="text" class="form-control" id="describa" name="describa"  placeholder="Describa" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Cognitiva:*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="cognitivaSi" name="cognitiva" value="true">
                                            <label class="form-check-label" for="cognitivaSi">Sí</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="cognitivaNo" name="cognitiva" value="false">
                                            <label class="form-check-label" for="cognitivaNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="describa2">Describa:</label>
                                    <input type="text" class="form-control" id="describa2" name="describa2"  placeholder="Describa2" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Excepciones:*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="excepcionesSi" name="excepciones" value="true">
                                            <label class="form-check-label" for="excepcionesSi">Sí</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="excepcionesNo" name="excepciones" value="false">
                                            <label class="form-check-label" for="excepcionesNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="describa3">Describa:</label>
                                    <input type="text" class="form-control" id="describa3" name="describa3"  placeholder="Describa3" required>
                                </div>
                                <button class="btn btn-secondary" onclick="showForm('victimasDelConflicto')">Atrás</button>
                                <button type="button" class="btn btn-primary btn-continuar">Continuar</button>
                            </div>
                            <!-- Etapa 4: Tecnico a matricular -->
                            <div id="programaregistro" style="display: none;">
                                <p>PROGRAMA A MATRICULAR (Parte final del formulario).</p>
                                <div class="form-group col-md-6">
                                    <label for="programa">PROGRAMA:</label>
                                    <select id="programa" name="programa" style="width: 387px; height: 40px; border: 1px solid #d7d3d3; border-radius: 5px;">
                                        <?php
                                        // Obtener los nombres de los cursos usando el modelo ProcetModel
                                        $cursos = \App\Models\ProimpactModel::pluck('curso');

                                        // Generar las opciones del select con los nombres de los cursos
                                        foreach ($cursos as $curso) {
                                            echo '<option value="' . $curso . '">' . $curso . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button class="btn btn-secondary" onclick="showForm('limitacionesCapacidades')">Atrás</button>
                                <button type="submit" class="btn btn-success" onclick="alerta2()">Matricularse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
        <ul class="enlaces" style="display: flex; justify-content: center; list-style: none; padding: 50;">
            <li style="margin: 0 20px;"><a rel="nofollow" href="https://www.ibero.edu.co" title="Iberoamericana"><img src="{{ asset('assets/logoIBERO.png') }}" width="174" height="75" alt=""></a></li>
            <li style="margin: 0 10px;"><a rel="nofollow" href="https://www.unimagdalena.edu.co" title="Magdalena"><img src="{{ asset('assets/Magdalena.jpg') }}assets/" width="124" height="75" alt=""></a></li>
        </ul>
    </div>
    <footer class="footer">
        <div class="box__footer">
            <img src="{{ asset('assets/impacto.jpeg') }}" alt="">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".btn-continuar").click(function () {
            $(this).closest("div").hide().next().show();
        });
    });
</script>
<script>
    function showForm(formId) {
        var forms = ["datosPersonales", "victimasDelConflicto", "limitacionesCapacidades","programaregistro"];
        for (var i = 0; i < forms.length; i++) {
            var form = document.getElementById(forms[i]);
            if (forms[i] === formId) {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    }
    function alerta2() {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "¡Gracias por Matricularte!",
            showConfirmButton: false,
            timer: 2500
        });
    }
</script>
</html>
