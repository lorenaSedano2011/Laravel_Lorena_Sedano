@extends('layouts.app')
@section('title', 'Listado de productos')
@section('contenido')

<h1 class="text-center p-3">Listado de Productos</h1>
<div class="p-5 table-responsive">
    <button type="button" class="btn btn-warning" onclick="window.location='{{ Route('Productos.create') }}'">Nuevo Producto</button>
    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultado as $item )
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->valor}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
