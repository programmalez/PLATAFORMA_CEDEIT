@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="margin-bottom: 20px; text-align: center;">Lista de Matriculados MAGDALENA</h1>
@stop

@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('matriculados.search2') }}" method="GET" role="search">
                <input type="text" name="q"placeholder="Buscar matriculados">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
            <div class="col-md-6">
            <p>Total de registros: {{ $totalMatrimagda}}</p>
        </div>
    </div>
</div>

    <div class="col-12 mt-3" id="Tabla_Ejecutar_Tareas">
        <div class="table-container">
            <table class="table table-bordered table-striped" >
                <thead  style="background-color:  rgb(77, 128, 204); ">
                    <tr>
                        <th>ID  </th>
                        <th>Nombre  </th>
                        <th>Apellido</th>
                        <th>Tipo documento</th>
                        <th>documento</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Programa Matriculado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matrimagda as $matrima) 
                            <tr>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->id) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->nombres) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->apellidos) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->identificacion) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->documento) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->celular1) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->correo) !!}</td>
                                <td>{!! str_ireplace($query ?? '', '<span class="highlighted-text">' . ($query ?? '') . '</span>', $matrima->programa) !!}</td>
                            </tr>
                    @endforeach   
                </tbody>
            </table>
        </div>
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
        background-color: rgb(0, 217, 255);
        font-weight: bold;
    }
</style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop