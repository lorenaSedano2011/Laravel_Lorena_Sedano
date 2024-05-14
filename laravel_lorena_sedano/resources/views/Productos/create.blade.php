@extends('layouts.app')
@section('title', 'Crear Producto')
@section('contenido')
    <br>
    <div>
        <h3>Crear Producto</h3>
        <form action="/Productos" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
