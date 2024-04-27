@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="margin-bottom: 20px; text-align: center;">Lista de Preinscritos Impacto al mundo</h1>
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
                        <th>Dirección</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Programa</th>
                        <th>Información</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $precetfoc = \App\Models\infoimpactoModel::select('id','nombres','apellidos',
                    'tipo_documento','numero_documento','direccion',
                    'celular','correo','programa',
                    'como_se_entero')->get();
                    ?>
                    @foreach ($precetfoc as $prece) 
                         <tr>
                            <td> {{$prece->id  }} </td>
                            <td> {{ $prece->nombres }} </td>
                            <td> {{ $prece->apellidos }} </td>
                            <td> {{ $prece->tipo_documento }}</td>
                            <td> {{ $prece->numero_documento }}</td>
                            <td> {{ $prece->direccion }}
                            <td> {{ $prece->celular }}</td>
                            <td> {{ $prece->correo }}</td>
                            <td> {{ $prece->programa }}</td>
                            <td> {{ $prece->como_se_entero }}</td>
                            </td>
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

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop