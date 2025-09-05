<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ventas</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f8; padding: 30px; }
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        a.button { display: inline-block; background: #4CAF50; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; margin-bottom: 15px; transition: background 0.3s ease; }
        a.button:hover { background: #45a049; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        th, td { padding: 12px; text-align: center; border-bottom: 1px solid #ddd; }
        th { background: #2196F3; color: white; }
        tr:hover { background: #f1f1f1; }
    </style>
</head>
<body>
    <h1>Lista de Ventas</h1>
    <div style="margin-bottom: 15px;">
        <a href="{{ route('menu') }}" class="button" style="background:#555; margin-right:10px;">Regresar</a>
        <a href="{{ route('ventas.create') }}" class="button">Registrar Venta</a>
    </div>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
    <table>
        <tr>
            <th>Código</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
        @foreach($ventas as $venta)
        <tr>
            <td>{{ $venta->producto_codigo }}</td>
            <td>{{ $venta->producto->nombre ?? 'N/A' }}</td>
            <td>{{ $venta->cantidad }}</td>
            <td>{{ number_format($venta->total, 2) }}</td>
            <td>{{ $venta->created_at->format('d/m/Y H:i') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
