@extends('layouts.principal')

@section('titulo', 'Modulo Retiros')

@section('hijos')
{{-- <h1>Modulo Retiros</h1> --}}


<h2>Afiliado: {{$afiliado}}</h2>

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
        @if($retiro->codafiliado==$afiliado)
        <tr>   
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th></th>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection