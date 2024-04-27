@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="margin-bottom: 20px; text-align: center;">Lista de Inscritos Seminarios, Diplomados y Cursos Cedeit</h1>
@stop

@section('content')
<div class="col-4" style="position: relative; left: -25px; top: -50px; text-aling: center">
    <div class="col-12 mt-3" id="Tabla_Ejecutar_Tareas">
        <div class="table-container">
            <table class="table table-bordered table-striped" >
                <thead  style="background-color:  rgb(77, 128, 204); ">
                    <tr>
                        <th>ID  </th>
                        <th>Nombres  </th>
                        <th>Apellidos</th>
                        <th>Tipo documento</th>
                        <th>Documento</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Programa</th>
                        <th>Información</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop