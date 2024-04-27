@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
    <div>
        <h4 class="mb-3">Lista de usuarios</h4>
    </div>
</div>
@stop

@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('register.search') }}" method="GET" role="search">
                <input type="text" name="q"placeholder="Buscar matriculados">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
            <div class="col-md-6">
            <p>Total de registros: {{ $totaluser ?? ''  }}</p>
        </div>
    </div>
</div>

<div class="col-12 mt-2" id="Tabla_Ejecutar_Tareas">
    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead style="background-color: rgb(77, 128, 204);">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('css')


@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
