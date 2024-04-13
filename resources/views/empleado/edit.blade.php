@extends('layouts.principal')

@section('titulo', 'Editar Empleados')

@section('hijos')
<form action="/empleado/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="">Codigo Empleado</label>
        <input type="text" name="codempleado" id="codempleado" class="form-control" value="{{$editarRegistro->codempleado}}"><br>
    </div>

    <div class="mb-3">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$editarRegistro->nombre}}"><br>
    </div>
    <div class="mb-3"> 
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" value="{{$editarRegistro->apellido}}"><br>
    </div>
    <div class="mb-3">
        <label for="">Nivel</label>
        <input type="text" name="nivel" id="nivel" class="form-control" value="{{$editarRegistro->nivel}}"><br>
    </div>
    <div class="mb-3">
        <label for="">Telefono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" value="{{$editarRegistro->telefono}}"><br>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection