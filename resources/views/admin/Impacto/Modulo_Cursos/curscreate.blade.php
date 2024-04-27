@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="margin-bottom: 20px; text-align: center;">Crear Cursos IMPACTO AL MUNDO</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia -->
            <form action="{{ route('createcurs1') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curso">Nombre del Curso:</label>
                            <input type="text" class="form-control" id="curso" name="curso">
                        </div>

                        <div class="form-group">
                            <label for="licencia"> Licencia de Funcionamiento:</label>
                            <input type="text" class="form-control" id="licencia" name="licencia">
                        </div>
                        <div class="form-group">
                            <label for="perfil">Perfil Profesional:</label>
                            <textarea class="form-control" id="perfil" name="perfil" style="width: 100%; height: 200px;"></textarea>
                        </div>
                        <label for="cuatri">Cuatrisemestre</label>
                            <select class="form-control" id="cuatri" name="cuatri" required>
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="imagen">Imagen:</label>
                                        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="documento">Plan de Estudios:</label>
                                        <input type="file" class="form-control-file" id="documento" name="documento" accept=".doc, .docx, .pdf, .txt">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- Columna 2 -->
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="titulo">Titulo Academico:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo">
                        </div>
                        <div class="form-group">
                            <label for="modalidad">Modalidad:</label>
                            <input type="text" class="form-control" id="modalidad" name="modalidad">
                        </div>

                        <div class="form-group">
                            <label for="texto">Informacion de Curso:</label>
                            <textarea class="form-control" id="texto" name="texto" style="width: 100%; height: 400px;"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"  onclick="alerta2()">Agregar</button>
                <button type="reset" id="reset" class="btn btn-danger">Resetear</button>
            </form>
            <br>
            <div class="col-12 mt-3" id="Tabla_Ejecutar_Tareas" style="overflow-x: auto;">
                <div class="table-container">
                    <table class="table table-bordered table-striped" style="width: 100%;">
                        <thead style="background-color: #007bff;">
                            <tr>
                                <th>ID</th>
                                <th>Curso</th>
                                <th>Titulo</th>
                                <th>Modalidad</th>
                                <th>Cuatrimestre</th>
                                <th>Informacion Curso</th>
                                <th>Perfil Profesional</th>
                                <th>Pemsum</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $proim= \App\Models\ProimpactModel::select('id','curso','licencia','perfil','cuatri','imagen','documento','titulo','modalidad','texto')->get();
                            ?>
                            @foreach ($proim as $proi)
                                <tr>
                                    <td> {{ $proi->id  }} </td>
                                    <td> {{ $proi->curso }} </td>
                                    <td> {{ $proi->titulo }}</td>
                                    <td> {{ $proi->modalidad }}</td>
                                    <td> {{ $proi->cuatri}}</td>
                                    <td> {{ substr($proi->perfil, 0, 30) }}{{ strlen($proi->perfil) > 30 ? '...' : '' }}
                                    <td>  {{ substr($proi->texto, 0, 30) }}{{ strlen($proi->texto) > 30 ? '...' : '' }} </td>
                                    <td> {{ $proi->documento }}</td>
                                    <td>
                                        <form action="{{ route('edit1', ['id' => $proi->id]) }}" method="get" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-accion" ><i class="fas fa-pen"></i></button>
                                        </form>
                                        <form action="{{ route('delete1', ['id' => $proi->id]) }}" method="post" style="display:inline;">
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
