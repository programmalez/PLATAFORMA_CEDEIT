@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="text-center">
    <h1>Programas Académicos Universidad Iberoamericana</h1>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia -->
            <form action="{{ route('createcurs3') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="programa">Programa Academico:</label>
                            <input type="text" class="form-control" id="programa" name="programa">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo SNIES:</label>
                            <input type="text" class="form-control" id="codigo" name="codigo">
                        </div>
                        <div class="form-group">
                            <label for="formacion">Nivel de Formacion:</label>
                            <input type="text" class="form-control" id="formacion" name="formacion">
                        </div>
                        <label for="oferta">Oferta Academica</label>
                            <select class="form-control" id="oferta" name="oferta" required>
                                <option value=""></option>
                                <option value="PREGRADO">PREGRADO</option>
                                <option value="POSTGRADO">POSTGRADO</option>
                            </select>
                        <div class="form-group">
                            <label for="profesional">Perfil Profesional:</label>
                            <textarea class="form-control" id="profesional" name="profesional" style="width: 100%; height: 200px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="mercado">Mercado laboral:</label>
                            <textarea class="form-control" id="mercado" name="mercado" style="width: 100%; height: 200px;"></textarea>
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
                            <input type="text" class="form-control" id="titulo" name="titulo">
                        </div>
                        <label for="semestre">Semestres</label>
                            <select class="form-control" id="semestre" name="semestre" required>
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                        <div class="form-group">
                            <label for="creditos">Numero de Creditos Academicos:</label>
                            <input type="text" class="form-control" id="creditos" name="creditos">
                        </div>
                        <label for="metodologia">Metodologia</label>
                        <select class="form-control" id="metodologia" name="metodologia" required>
                            <option value=""></option>
                            <option value="Virtual">MODALIDAD VIRTUAL</option>
                            <option value="Distancia">MODALIDAD A DISTANCIA</option>
                        </select>
                        <div class="form-group">
                            <label for="texto">Informacion de Curso:</label>
                            <textarea class="form-control" id="texto" name="texto" style="width: 100%; height: 450px;"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="documento">Pensum Academico:</label>
                                <input type="file" class="form-control-file" id="documento" name="documento" accept=".doc, .docx, .pdf, .txt">
                            </div>
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
                                <th>Programa</th>
                                <th>SNIES</th>
                                <th>Modalidad</th>
                                <th>Informacion Curso</th>
                                <th>Semestre</th>
                                <th>Documento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $proibero = \App\Models\ProiberoModel::select('id','programa','codigo','metodologia','texto','semestre','documento')->get();
                            ?>
                            @foreach ($proibero as $proibe)
                                <tr>
                                    <td> {{ $proibe->id  }} </td>
                                    <td> {{ $proibe->programa }} </td>
                                    <td> {{ $proibe->codigo }} </td>
                                    <td> {{ $proibe->metodologia }} </td>
                                    <td> {{ substr($proibe->texto, 0, 30) }}{{ strlen($proibe->texto) > 30 ? '...' : '' }}
                                    <td> {{ $proibe->semestre}}</td>
                                    <td> {{ $proibe->documento }}</td>
                                    <td>
                                        <form action="{{ route('edit3', ['id' => $proibe->id]) }}" method="get" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-accion" ><i class="fas fa-pen"></i></button>
                                        </form>
                                        <form action="{{ route('delete3', ['id' => $proibe->id]) }}" method="post" style="display:inline;">
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
                title: "Se ha agregado correctamente el programa",
                showConfirmButton: false,
                timer: 2500
            });
        }
    </script>
@stop
