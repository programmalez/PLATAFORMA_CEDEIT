@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="margin-bottom: 20px; text-align: center;">Editar Noticias Impacto al Mundo</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario para editar o agregar noticia -->
            <form action="{{ route('update_not', ['id' => $noticia->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre de la noticia:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value=" {{ $noticia->nombre }} ">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" >
                            @if( $noticia ->imagen)
                                        <p>Imagen actual: {{  $noticia ->imagen }}</p>
                                    @else
                                        <p>No hay imagen seleccionada</p>
                                    @endif
                        </div>
                        <div class="row">
                            <!-- Otras columnas si las hay -->
                        
                            <!-- Columna de Fecha de publicación -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_publicacion">Fecha de publicación:</label>
                                    <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{ $noticia->fecha_publicacion }}">
                                </div>
                            </div>
                        
                            <!-- Columna de Hora de publicación -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hora_publicacion">Hora de publicación:</label>
                                    <input type="time" class="form-control" id="hora_publicacion" name="hora_publicacion"  value="{{ $noticia->hora_publicacion }}" >
                                </div>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="autor">Autor:</label>
                            <input type="text" class="form-control" id="autor" name="autor"  value="{{ $noticia->autor }}">
                        </div>
                        <div class="form-group">
                            <label for="enlace">Enlace:</label>
                            <input type="text" class="form-control" id="enlace" name="enlace"  value="{{ $noticia->enlace }}">
                        </div>
                    </div>
                    
                    <!-- Columna 2 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="texto">Texto:</label>
                            <textarea class="form-control" id="texto" name="texto" style="width: 100%; height: 400px;">{{ $noticia->texto }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="action" value="edit">Actualizar</button>
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
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop