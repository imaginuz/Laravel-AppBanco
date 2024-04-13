@extends('layouts.principal')

@section('titulo', 'Modulo Empleados')

@section('hijos')
{{-- <h1>Modulo Empleados</h1> --}}
<a href="/empleado/create" class="btn btn-primary">Crear Nuevo Empleado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Telefono</th>
            <th>Acciones</th>
            <th>Destruir</th>
        </tr>
    </thead>

    <tbody>
        <!-- $empleados viene del controlador, with->'empleados' -->
        @foreach($empleados as $empleado)
        <tr>   
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->codempleado}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th>{{$empleado->nivel}}</th>
            <th>{{$empleado->telefono}}</th>
            <th>
                <a href="/empleado/{{$empleado->id}}/edit" 
                    class="btn btn-info">Editar</a>

                <a href="/afiliado/{{$empleado->id}}" 
                    class="btn btn-success">Afiliados</a>                 
            </th>
            <th>
                <form action="/empleado/{{$empleado->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection