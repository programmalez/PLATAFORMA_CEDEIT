@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="text-center">
    <h1>Programas Académicos Universidad Magdalena</h1>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia -->
            <form action="{{ route('update2', ['id' => $progmag->id]) }}" method="post"  enctype="multipart/form-data" >
                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="programa">Programa Academico:</label>
                            <input type="text" class="form-control" id="programa" name="programa" value="{{  $progmag->programa }}">
                        </div>
                        <div class="form-group">
                            <label for="facultad">Facultad:</label>
                            <input type="text" class="form-control" id="facultad" name="facultad" value="{{  $progmag->facultad }}">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo SNIES:</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="{{  $progmag->codigo }}">
                        </div>
                        <div class="form-group">
                            <label for="formacion">Nivel de Formacion:</label>
                            <input type="text" class="form-control" id="formacion" name="formacion" value="{{  $progmag->formacion }}">
                        </div>
                        <label for="oferta">Oferta Academica</label>
                        <select class="form-control" id="oferta" name="oferta" required>
                            <option value="" {{ $progmag->oferta == '' ? 'selected' : '' }}></option>
                            <option value="PREGRADO" {{ $progmag->oferta == 'PREGRADO' ? 'selected' : '' }}>PREGRADO</option>
                            <option value="POSTGRADO" {{ $progmag->oferta == 'POSTGRADO' ? 'selected' : '' }}>POSTGRADO</option>
                        </select>

                        <div class="form-group">
                            <label for="profesional">Perfil Profesional:</label>
                            <textarea class="form-control" id="profesional" name="profesional" style="width: 100%; height: 200px;">{{  $progmag->profesional }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="ocupacional">Perfil Ocupasional:</label>
                            <textarea class="form-control" id="ocupacional" name="ocupacional" style="width: 100%; height: 200px;">{{  $progmag->ocupacional }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Subir Imagen del Programa:</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <!-- Columna 2 -->
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="titulo">Titulo que otorga:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{  $progmag->titulo }}">
                        </div>
                        <label for="semestre">Semestres</label>
                        <select class="form-control" id="semestre" name="semestre" required>
                            <option value="0" {{ $progmag->semestre == 0 ? 'selected' : '' }}></option>
                            <option value="1" {{ $progmag->semestre == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $progmag->semestre == 2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $progmag->semestre == 3 ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $progmag->semestre == 4 ? 'selected' : '' }}>4</option>
                            <option value="5" {{ $progmag->semestre == 5 ? 'selected' : '' }}>5</option>
                            <option value="6" {{ $progmag->semestre == 6 ? 'selected' : '' }}>6</option>
                            <option value="7" {{ $progmag->semestre == 7 ? 'selected' : '' }}>7</option>
                            <option value="8" {{ $progmag->semestre == 8 ? 'selected' : '' }}>8</option>
                            <option value="9" {{ $progmag->semestre == 9 ? 'selected' : '' }}>9</option>
                            <option value="10" {{ $progmag->semestre == 10 ? 'selected' : '' }}>10</option>
                        </select>
                        <div class="form-group">
                            <label for="registro">Registro Calificado:</label>
                            <input type="text" class="form-control" id="registro" name="registro" value="{{  $progmag->registro }}" required>
                        </div>
                        <div class="form-group">
                            <label for="creditos">Numero de Creditos Academicos:</label>
                            <input type="text" class="form-control" id="creditos" name="creditos" value="{{  $progmag->creditos }}" required>
                        </div>
                        <label for="metodologia">Metodologia</label>
                        <select class="form-control" id="metodologia" name="metodologia" required>
                            <option value="" {{ $progmag->metodologia == '' ? 'selected' : '' }}></option>
                            <option value="Virtual" {{ $progmag->metodologia == 'Virtual' ? 'selected' : '' }}>MODALIDAD VIRTUAL</option>
                            <option value="Distancia" {{ $progmag->metodologia == 'Distancia' ? 'selected' : '' }}>MODALIDAD A DISTANCIA</option>
                        </select>

                        <div class="form-group">
                            <label for="texto">Informacion de Curso:</label>
                            <textarea class="form-control" id="texto" name="texto" style="width: 100%; height: 450px;">{{  $progmag->texto }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="documento">Pensum Academico:</label>
                                <input type="file" class="form-control-file" id="documento" name="documento" accept=".doc, .docx, .pdf, .txt">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button onclick="goBack()" class="btn btn-secondary">Atrás</button>
            </form>
        </div>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
@stop

@section('css')
    <style>
        body {
            background-color:  #fff !important;/* Color blanco para el fondo */
        }
        /* Estilo para las cajas y letras */
        .form-group label {
            font-weight: bold;
            color: #2b3034; /* Color azul */
        }

        .form-control {
            border: 2px solid #cacaca; /* Borde azul */
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 15px;
        }

        /* Estilo específico para el textarea con clase 'textarea-grande' */
        .textarea-grande {
            width: 100%;
            height: 300px; /* Altura ajustable según tus preferencias */

            border-radius: 15px;
            padding: 18px;
            margin-bottom: 15px;

        }

        /* Estilo para el botón de submit */
        .btn {
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-bottom: 10px;
            text-align: center;
        }
        form{
            text-align: center;
        }
        .btn-accion {
         padding: 5px 7px; /* Ajusta el padding según tus preferencias para cambiar el tamaño */
         font-size: 12px;  /* Ajusta el tamaño de la fuente según tus preferencias */
         }
         .center-text {
            text-align: center;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function alerta2() {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Se ha actualizado correctamente el curso",
                showConfirmButton: false,
                timer: 2500
            });
        }
    </script>
@stop
