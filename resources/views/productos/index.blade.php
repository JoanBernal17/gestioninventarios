<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
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

        .acciones {
            margin: 25px auto;
            text-align: center;
        }

        a.button {
            display: inline-block;
            background: #4CAF50;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin: 5px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        a.button:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        a.button.regresar {
            background: #555;
        }

        a.button.regresar:hover {
            background: #333;
        }

        .alert {
            width: 90%;
            max-width: 1000px;
            margin: 15px auto;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        table {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto 40px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #2e7d32;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:hover {
            background: #f1f8f4;
        }

        form {
            display: inline;
        }

        button.delete {
            background: #e53935;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button.delete:hover {
            background: #c62828;
            transform: scale(1.05);
        }

        a.edit {
            background: #fbc02d;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            margin-right: 5px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        a.edit:hover {
            background: #f9a825;
            transform: scale(1.05);
        }

        footer {
            margin-top: auto;
            background: #2e7d32;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            letter-spacing: 1px;
        }

        @media (max-width: 600px) {
            table {
                width: 100%;
                font-size: 14px;
            }
            th, td {
                padding: 10px;
            }
            .acciones {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            a.button {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>📦 Lista de Productos</h1>
    </header>

    <div class="acciones">
        <a href="{{ route('menu') }}" class="button regresar">⬅ Regresar</a>
        <a href="{{ route('productos.create') }}" class="button">➕ Agregar Producto</a>
    </div>

    <!-- Mensajes -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

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
            <td>${{ number_format($producto->precio, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('productos.edit', $producto->codigo) }}" class="edit">✏ Editar</a>
                <form action="{{ route('productos.destroy', $producto->codigo) }}" method="POST" onsubmit="return confirmarEliminacion()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">🗑 Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <footer>
        Elaborado por: <strong>Joan Alonso Bernal Suarez</strong>
    </footer>

    <script>
        function confirmarEliminacion() {
            return confirm("⚠️ ¿Estás seguro de que deseas eliminar este producto?");
        }
    </script>
</body>
</html>
