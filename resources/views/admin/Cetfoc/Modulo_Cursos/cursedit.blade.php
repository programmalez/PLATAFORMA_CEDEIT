@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Modulo Cursos</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia -->
            <form action="{{ route('update_cur', ['id' => $procet->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curso">Nombre del Curso:</label>
                            <input type="text" class="form-control" id="curso" name="curso" value=" {{ $procet->curso }} ">
                        </div>

                        <div class="form-group">
                            <label for="licencia"> Licencia de Funcionamiento:</label>
                            <input type="text" class="form-control" id="licencia" name="licencia"value=" {{ $procet->licencia }} ">
                        </div>
                        <div class="form-group">
                            <label for="perfil">Perfil Profesional:</label>
                            <textarea class="form-control" id="perfil" name="perfil" style="width: 100%; height: 200px;" >{{ $procet->perfil }}</textarea>
                        </div>
                        <label for="cuatri">Cuatrisemestre</label>
                        <select class="form-control" id="cuatri" name="cuatri"  required>
                            <option value="0" {{  $procet ->cuatri == 0 ? 'selected' : '' }}></option>
                            <option value="1" {{  $procet ->cuatri == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{  $procet ->cuatri == 2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{  $procet ->cuatri == 3 ? 'selected' : '' }}>3</option>
                        </select>
                            <div class="row">
                                <div class="form-group">
                                    <label for="imagen">Imagen:</label>
                                    <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                                    @if($procet->imagen)
                                        <p>Imagen actual: {{ $procet->imagen }}</p>
                                    @else
                                        <p>No hay imagen seleccionada</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="documento">Plan de Estudios:</label>
                                    <input type="file" class="form-control-file" id="documento" name="documento" accept=".doc, .docx, .pdf, .txt">
                                    @if($procet->documento)
                                        <p>Documento actual: {{$procet->documento }}</p>
                                    @else
                                        <p>No hay documento seleccionado</p>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <!-- Columna 2 -->
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="titulo">Titulo Academico:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value=" {{ $procet->titulo }} ">
                        </div>
                        <div class="form-group">
                            <label for="modalidad">Modalidad:</label>
                            <input type="text" class="form-control" id="modalidad" name="modalidad" value=" {{ $procet->modalidad }} ">
                        </div>

                        <div class="form-group">
                            <label for="texto">Informacion de Curso:</label>
                            <textarea class="form-control" id="texto" name="texto" style="width: 100%; height: 400px;">{{ $procet->texto }}</textarea>
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
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
