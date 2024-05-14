@extends('layouts.app')
@section('title', 'Listado de clientes')
@section('contenido')

<h1 class="text-center p-3">Listado de clientes</h1>
<div class="p-5 table-responsive">
    <button type="button" class="btn btn-warning" onclick="window.location='{{ Route('Clientes.create') }}'">Nuevo Cliente</button>
    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
                <th scope="col">Edad</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultado as $item )
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->documento}}</td>
                <td>{{$item->edad}}</td>
                <td>{{$item->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
