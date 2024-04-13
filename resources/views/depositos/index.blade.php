@extends('layouts.principal')

@section('titulo', 'Modulo Depositos')

@section('hijos')
{{-- <h1>Modulo Depositos</h1> --}}
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
        @foreach($depositos as $deposito)
        @if($deposito->codafiliado==$afiliado)
        <tr>   
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->monto}}</th>
            <th></th>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection