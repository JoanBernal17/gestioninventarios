<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        // Seleccionamos solo las columnas necesarias
        $ventas = Venta::with(['producto:codigo,nombre,precio'])
            ->orderBy('created_at', 'desc')
            ->get(['id','producto_codigo','cantidad','precio_unitario','total','created_at','updated_at']); // evita select *

        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,codigo',
            'cantidad' => 'required|integer|min:1',
        ]);

        $producto = Producto::findOrFail($request->producto_id);

        if ($request->cantidad > $producto->cantidad) {
            return redirect()->back()->with('error', 'No hay suficiente stock disponible.');
        }

        $total = $producto->precio * $request->cantidad;
        $producto->cantidad -= $request->cantidad;
        $producto->save();

        Venta::create([
            'producto_codigo' => $producto->codigo,
            'cantidad' => $request->cantidad,
            'precio_unitario' => $producto->precio,
            'total' => $total,
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta registrada correctamente.');
    }
}
