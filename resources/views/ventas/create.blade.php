<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Venta</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f8; padding: 30px; }
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        form { background: white; padding: 20px; border-radius: 10px; max-width: 500px; margin: auto; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        label { display: block; margin: 10px 0 5px; }
        input, select { width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 15px; }
        button { background: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; }
        button:hover { background: #45a049; }
    </style>
</head>
<body>
    <h1>Registrar Venta</h1>
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <label for="producto_id">Producto:</label>
        <select name="producto_id" id="producto_id" required>
            <option value="">-- Seleccione un producto --</option>
            @foreach($productos as $producto)
                <option value="{{ $producto->codigo }}">{{ $producto->nombre }} (Stock: {{ $producto->cantidad }})</option>
            @endforeach
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required>

        <button type="submit">Registrar Venta</button>
    </form>
</body>
</html>
