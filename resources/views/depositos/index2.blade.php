@extends('layouts.principal')

@section('titulo', 'Modulo Depositos x Afiliado')

@section('hijos')
{{-- <h1>Modulo Depositos x Cliente</h1> --}}
<h2>
    <b>Empleado:</b> {{$empleado->nombre}} {{$empleado->apellido}}
</h2>
<h2>
    <b>Afiliado:</b> {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}
</h2>

<a href="/depositos/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Deposito</a>
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
        @foreach($depositos as $deposito)
        @if($deposito->codafiliado==$afiliado->id)
        <tr>   
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->monto}}</th>
            <th></th>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection