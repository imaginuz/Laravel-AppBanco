@extends('layouts.principal')

@section('titulo', 'Editar Afiliado')

@section('hijos')

<form action="/afiliado/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="">Codigo Afiliado</label>
        <input type="text" name="codafiliado" id="codafiliado" class="form-control" value="{{$editarRegistro->codafiliado}}"><br>
    </div>

    <div class="mb-3">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{$editarRegistro->nombre}}"><br>
    </div>
    <div class="mb-3"> 
        <label for="">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" value="{{$editarRegistro->apellido}}"><br>
    </div>
    <div class="mb-3">
        <label for="">Ciudad</label>
        <input type="text" name="ciudad" class="form-control" id="ciudad" value="{{$editarRegistro->ciudad}}"><br>
    </div>
    <div class="mb-3">
        <label for="">Telefono</label>
        <input type="text" name="telefono" class="form-control" id="telefono" value="{{$editarRegistro->telefono}}"><br>
    </div>
    <div class="mb-3">
        <label for="">Edad</label>
        <input type="text" name="edad" class="form-control" id="edad" value="{{$editarRegistro->edad}}"><br>
    </div>
    
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection