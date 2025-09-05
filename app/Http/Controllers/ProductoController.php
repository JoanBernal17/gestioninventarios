<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Trae todos los productos
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Valida los datos antes de guardar
        $request->validate([
            'codigo' => 'required|string|unique:productos,codigo',
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric'
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado correctamente.');
    }

    public function edit($codigo)
    {
        $producto = Producto::findOrFail($codigo);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $codigo)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric'
        ]);

        $producto = Producto::findOrFail($codigo);
        $producto->update($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($codigo)
    {
        $producto = Producto::findOrFail($codigo);
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado correctamente.');
    }
}
