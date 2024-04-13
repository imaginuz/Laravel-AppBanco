@extends('layouts.principal')

@section('titulo', 'Crear Afiliados')

@section('hijos')
<form action="/afiliado" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Codigo Afiliado</label>
        <input type="text" name="codigoAfiliado" class="form-control"><br>
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
        <label for="">Ciudad</label>
        <input type="text" name="ciudad" class="form-control"><br>
    </div>
    <div class="mb-3">
        <label for="">Telefono</label>
        <input type="text" name="telefono" class="form-control"><br>
    </div>
    <div class="mb-3">
        <label for="">Edad</label>
        <input type="text" name="edad" class="form-control"><br>
    </div>
    
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection