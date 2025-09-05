<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>

    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Producto</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <label>Código</label>
            <input type="text" name="codigo" required>

            <label>Nombre</label>
            <input type="text" name="nombre" required>

            <label>Descripción</label>
            <textarea name="descripcion" rows="3"></textarea>

            <label>Cantidad</label>
            <input type="number" name="cantidad" required min="0">

            <label>Precio</label>
            <input type="text" name="precio" required>

            <button type="submit">Guardar</button>
        </form>
        <a href="{{ route('menu') }}" class="button" style="background:#555; color:white; padding:8px 15px; text-decoration:none; border-radius:5px; margin-bottom:15px; display:inline-block;">
    Regresar
    </a>
    </div>
</body>
</html>
