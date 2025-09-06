<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ventas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9fafc;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(135deg, #4CAF50, #2e7d32);
            color: white;
            text-align: center;
            padding: 30px 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            width: 95%;
            max-width: 900px;
            margin: 30px auto;
        }

        .acciones {
            margin-bottom: 20px;
            text-align: center;
        }

        .acciones a {
            display: inline-block;
            margin: 0 8px;
            padding: 12px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .acciones .volver {
            background: #555;
            color: white;
        }
        .acciones .volver:hover {
            background: #333;
            transform: scale(1.05);
        }

        .acciones .registrar {
            background: #4CAF50;
            color: white;
        }
        .acciones .registrar:hover {
            background: #45a049;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 15px;
        }

        th {
            background: #4CAF50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tr:hover {
            background: #f1f1f1;
        }

        .mensaje {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .success { color: green; }
        .error { color: red; }

        footer {
            margin-top: auto;
            background: #2e7d32;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <header>
        <h1>📋 Lista de Ventas</h1>
    </header>

    <div class="container">

        <div class="acciones">
            <a href="{{ route('menu') }}" class="volver">⬅ Regresar</a>
            <a href="{{ route('ventas.create') }}" class="registrar">➕ Registrar Venta</a>
        </div>

        @if(session('success'))
            <p class="mensaje success">{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p class="mensaje error">{{ session('error') }}</p>
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
                <td>${{ number_format($venta->total, 2) }}</td>
                <td>{{ $venta->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <footer>
        Elaborado por: <strong>Joan Alonso Bernal Suarez</strong>
    </footer>

</body>
</html>
