@extends('layouts.principal')

@section('titulo', 'Crear Empleados')

@section('hijos')
<form action="/empleado" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Codigo Empleado</label>
        <input type="text" name="codigoEmpleado" class="form-control"><br>
    </div>

    <div class="mb-3">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control"><br>
    </div>
    <div class="mb-3"> 
        <label for="">Apellido</label>
        <input type="text" name="apellido" class="form-control"><br>
    </div>
    <div class="mb-3">
        <label for="">Nivel</label>
        <input type="text" name="nivel" class="form-control"><br>
    </div>
    <div class="mb-3">
        <label for="">Telefono</label>
        <input type="text" name="telefono" class="form-control"><br>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection