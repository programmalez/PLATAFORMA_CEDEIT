@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="margin-bottom: 20px; text-align: center;">Lista de Preinscritos MAGDALENA</h1>
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
            <p>Total de registros: {{ $totalPreinscritos }}</p>
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
                    <th>Programa Preinscritos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Preinscritos as $Preins) 
                <tr>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->id) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->nombres) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->apellidos) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->tipo_documento) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->numero_documento) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->celular) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->correo) !!}</td>
                    <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $Preins->programa) !!}</td>
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
