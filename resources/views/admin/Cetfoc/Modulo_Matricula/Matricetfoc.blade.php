@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="margin-bottom: 20px; text-align: center;">Lista de MATRICULADOS Cetfoc</h1>
@stop

@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('matriculados.search') }}" method="GET" role="search">
                <input type="text" name="q"placeholder="Buscar matriculados">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
            <div class="col-md-6">
            <p>Total de registros: {{ $totalMatriculados }}</p>
        </div>
    </div>
</div>

<div class="col-12 mt-3">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead style="background-color:  rgb(77, 128, 204);">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo documento</th>
                    <th>Documento</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Programa Matriculado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matriculados as $matriculado) 
                <tr>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->id) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->nombres1) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->apellido1) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->identificacion) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->documento) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->celular1) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->correo) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matriculado->programa) !!}</td>
                </tr>
                
                @endforeach   
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .table-responsive {
            max-height: 250px !important;  /* Altura máxima de la tabla */
            overflow-y: auto; /* Agrega barra de desplazamiento vertical si es necesario */
        }
        .highlighted-text {
            background-color: rgb(0, 255, 42);
            font-weight: bold;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
