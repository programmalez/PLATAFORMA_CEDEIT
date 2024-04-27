@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="margin-bottom: 20px; text-align: center;">Agregar Noticias Cetfoc</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia -->
            <form action="{{ route('create') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre de la noticia:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                        </div>
                        <div class="row">
                            <!-- Otras columnas si las hay -->

                            <!-- Columna de Fecha de publicación -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_publicacion">Fecha de publicación:</label>
                                    <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" >
                                </div>
                            </div>

                            <!-- Columna de Hora de publicación -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hora_publicacion">Hora de publicación:</label>
                                    <input type="time" class="form-control" id="hora_publicacion" name="hora_publicacion" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="autor">Autor:</label>
                            <input type="text" class="form-control" id="autor" name="autor">
                        </div>
                        <div class="form-group">
                            <label for="enlace">Enlace:</label>
                            <input type="text" class="form-control" id="enlace" name="enlace">
                        </div>
                    </div>

                    <!-- Columna 2 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="texto">Texto:</label>
                            <textarea class="form-control" id="texto" name="texto" style="width: 100%; height: 400px;"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" onclick="alerta2()">Agregar</button>
                <button type="reset" id="reset" class="btn btn-danger">Resetear</button>
            </form>
            <br>
            <div class="col-12 mt-3" id="Tabla_Noticias_Cetfoc" style="overflow-x: auto;">
                <div class="table-container">
                    <table class="table table-bordered table-striped" style="width: 100%;">
                        <thead style="background-color: #007bff;">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Texto</th>
                                <th>Autor</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $noticias = \App\Models\NoticiascetfocModel::select('id','nombre','imagen','fecha_publicacion','hora_publicacion','texto','autor','enlace')->get();
                            ?>
                            @foreach ($noticias as $noticia)
                                <tr>
                                    <td> {{ $noticia->id  }} </td>
                                    <td> {{ $noticia->nombre }} </td>
                                    <td>  {{ substr($noticia->texto, 0, 30) }}{{ strlen($noticia->texto) > 30 ? '...' : '' }} </td>
                                    <td> {{ $noticia->autor }}</td>
                                    <td> {{ $noticia->fecha_publicacion}}</td>
                                    <td> {{ $noticia->hora_publicacion}}</td>
                                    <td>
                                        <form action="{{ route('edit_no', ['id' => $noticia->id]) }}" method="get" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-accion" ><i class="fas fa-pen"></i></button>
                                        </form>
                                        <form action="{{ route('delete_no', ['id' => $noticia->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-accion" onclick="eliminar()">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
                title: "La noticia se ha agregado correctamente",
                showConfirmButton: false,
                timer: 2500
            });
        }
    </script>
@stop
