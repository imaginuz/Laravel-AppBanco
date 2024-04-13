@extends('layouts.principal')

@section('titulo', 'Modulo Afiliados')

@section('hijos')
{{-- <h1>Modulo Afiliados</h1> --}}
<a href="/afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodAfiliado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Acciones</th>
            <th>Eliminar</th>
        </tr>
    </thead>

    <tbody>
        <!-- $afiliados viene del controlador, with->'afiliados' -->
        @foreach($afiliados as $afiliado)
        <tr>   
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->codafiliado}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th>{{$afiliado->ciudad}}</th>
            <th>{{$afiliado->telefono}}</th>
            <th>{{$afiliado->edad}}</th>
            <th>
                <a href="/afiliado/{{$afiliado->id}}/edit" 
                    class="btn btn-info">Editar</a>
            </th>
            <th>
                <form action="/afiliado/{{$afiliado->id}}" method="POST">
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