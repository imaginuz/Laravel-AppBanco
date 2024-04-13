@extends('layouts.principal')

@section('titulo', 'Modulo Afiliado Index2')

@section('hijos')
{{-- <h1>Modulo Afiliado</h1> --}}
<br>Nombre De Empleado {{$empleado->codempleado}} {{$empleado->nombre}} {{$empleado->apellido}}

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
                <a href="/retiros/{{$afiliado->id}}/{{$empleado->id}}" 
                    class="btn btn-info">Retiro</a>

                <a href="/depositos/{{$afiliado->id}}/{{$empleado->id}}" 
                    class="btn btn-info">Deposito</a>
    
    
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection