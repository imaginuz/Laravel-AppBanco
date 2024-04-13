@extends('layouts.principal')

@section('titulo', 'Modulo Retiros x Afiliado')

@section('hijos')
{{-- <h1>Modulo Retiros x Cliente</h1> --}}
<h2>
    <b>Empleado:</b> {{$empleado->nombre}} {{$empleado->apellido}}
</h2>
<h2>
    <b>Afiliado:</b> {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}
</h2>

<a href="/retiros/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Retiro</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodAfiliado</th>
            <th>CodEmpleado</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->codafiliado==$afiliado->id)
        <tr>   
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th></th>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection