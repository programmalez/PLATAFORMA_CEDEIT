@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="margin-bottom: 20px; text-align: center;">Agregar Seminarios, Diplomados CEDEIT</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia cedeit -->
            <form action="{{ route('createcedeit') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curso">Nombre del Curso:</label>
                            <input type="text" class="form-control" id="curso" name="curso">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <!-- Columna 2 -->
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="titulo">Seminario, Diplomado:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" onclick="alerta2()">Agregar</button>
                <button type="reset" id="reset" class="btn btn-danger">Resetear</button>
            </form>
            <br>
            <div class="col-12 mt-3" id="Tabla_Ejecutar_Tareas" style="overflow-x: auto;">
                <div class="table-container">
                    <table class="table table-bordered table-striped" style="width: 100%;">
                        <thead style="background-color: #007bff;">
                             <tr>
                                <th>ID  </th>
                                <th>Curso</th>
                                <th>Titulo</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php
                                $procedeit = \App\Models\ProcedModel::select('id','curso','titulo',
                                'imagen')->get();
                                ?>
                                @foreach ($procedeit as $proced)
                                     <tr>
                                        <td> {{$proced->id  }} </td>
                                        <td> {{ $proced->curso }} </td>
                                        <td> {{ $proced->titulo }} </td>
                                        <td> {{ $proced->imagen }} </td>
                                        <td>
                                            <form action="{{ route('editcedeit', ['id' => $proced->id]) }}" method="get" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-accion" ><i class="fas fa-pen"></i></button>
                                            </form>
                                            <form action="{{ route('destroycedeit', ['id' => $proced->id]) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-accion" onclick="return confirm('¿Desea Eliminar?');">
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
                title: "Se ha agregado correctamente el curso",
                showConfirmButton: false,
                timer: 2500
            });
        }
    </script>
@stop
