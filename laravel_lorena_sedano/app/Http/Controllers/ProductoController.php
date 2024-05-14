<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultado = Producto::all();
        return view('Productos.Ver',compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ##return $request ->all();
        $dato = new Producto();
        $dato->nombre = $request->input('nombre');
        $dato->cantidad = $request->input('cantidad');
        $dato->valor = $request->input('valor');
        $dato->save();
        return 'Producto Creado Correctamente';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
