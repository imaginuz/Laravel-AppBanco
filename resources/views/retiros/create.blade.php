@extends('layouts.principal')

@section('titulo', 'Realizar Retiro')

@section('hijos')
<h1>Realizar Retiro</h1>

<form action="/retiros" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Codigo Empleado</label>
        <input type="text" name="codempleado" class="form-control" value="{{$id}}"><br>
    </div>

    <div class="mb-3">
        <label for="">Codigo Afiliado</label>
        <input type="text" name="codafiliado" class="form-control" value="{{$id2}}"><br>
    </div>
    <div class="mb-3"> 
        <label for="">Fecha</label>
        <input type="text" name="fecha" class="form-control" "><br>
    </div>
    <div class="mb-3">
        <label for="">Monto</label>
        <input type="text" name="monto" class="form-control" "><br>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection