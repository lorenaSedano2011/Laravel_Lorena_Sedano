@extends('layouts.app')
@section('title', 'Crear cliente')
@section('contenido')
    <br>
    <div>
        <h3>Crear clientes</h3>
        <form action="/Clientes" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">edad</label>
                <input type="text" class="form-control" id="edad" name="edad">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
