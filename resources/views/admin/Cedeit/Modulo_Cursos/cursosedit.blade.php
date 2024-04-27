@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="margin-bottom: 20px; text-align: center;">Lista de cursos </h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia cedeit -->
            <form action="{{ route('updatecedeit', ['id' => $proced->id]) }}" method="post"  enctype="multipart/form-data" >
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curso">Nombre del Curso:</label>
                            <input type="text" class="form-control" id="curso" name="curso" value="{{ $proced->curso }}">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                @if($proced->imagen)
                                    <img src="{{ asset('Imagenes/' . $proced->imagen) }}" alt="Imagen actual" style="max-width: 300px;">
                                    <p>Imagen actual: {{ $proced->imagen }}</p>
                                @else
                                    <p>No hay imagen seleccionada</p>
                                @endif
                                <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <!-- Columna 2 -->
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="titulo">Seminario, Diplomado:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $proced->titulo }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" onclick="alerta2()">Actualizar</button>
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
