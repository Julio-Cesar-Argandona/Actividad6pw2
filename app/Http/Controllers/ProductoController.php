<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // GET - Listar todos los productos
    public function index()
    {
        return Producto::all();
    }

    // POST - Crear un producto
    public function store(Request $request)
    {
        $producto = Producto::create($request->only('nombre', 'precio', 'stock'));
        return response()->json(['status' => 'Producto creado', 'producto' => $producto]);
    }

    // PUT - Editar un producto
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->only('nombre', 'precio', 'stock'));
        return response()->json(['status' => 'Producto actualizado', 'producto' => $producto]);
    }
}
