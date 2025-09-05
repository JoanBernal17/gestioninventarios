<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f8; padding: 30px; }
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        a.button { display: inline-block; background: #4CAF50; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; margin-bottom: 15px; transition: background 0.3s ease; }
        a.button:hover { background: #45a049; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        th, td { padding: 12px; text-align: center; border-bottom: 1px solid #ddd; }
        th { background: #2196F3; color: white; }
        tr:hover { background: #f1f1f1; }
        form { display: inline; }
        button.delete { background: #f44336; color: white; border: none; padding: 6px 12px; border-radius: 5px; cursor: pointer; transition: background 0.3s ease; }
        button.delete:hover { background: #d32f2f; }
        a.edit { background: #FFC107; color: white; padding: 6px 12px; border-radius: 5px; text-decoration: none; margin-right: 5px; }
        a.edit:hover { background: #ffb300; }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>
<div style="margin-bottom: 15px;">
    <a href="{{ route('menu') }}" class="button" style="background:#555; margin-right:10px;">Regresar</a>
    <a href="{{ route('productos.create') }}" class="button">Agregar Producto</a>
</div>
    <table>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->codigo }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <a href="{{ route('productos.edit', $producto->codigo) }}" class="edit">Editar</a>
                <form action="{{ route('productos.destroy', $producto->codigo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
