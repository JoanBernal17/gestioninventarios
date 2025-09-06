<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
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
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 500px;
            margin: 40px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2e7d32;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #444;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input:focus, textarea:focus {
            border: 1px solid #4CAF50;
            outline: none;
            box-shadow: 0 0 6px rgba(76,175,80,0.4);
        }

        .acciones {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }

        button, a.button {
            flex: 1;
            margin: 0 5px;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        button {
            background: #4CAF50;
            color: white;
        }

        button:hover {
            background: #45a049;
            transform: scale(1.05);
        }

        a.button {
            background: #555;
            color: white;
        }

        a.button:hover {
            background: #333;
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
    </style>
</head>
<body>

    <header>
        <h1>➕ Agregar Producto</h1>
    </header>

    <div class="container">
        <h2>Nuevo Registro</h2>
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

            <div class="acciones">
                <a href="{{ route('menu') }}" class="button">⬅ Cancelar</a>
                <button type="submit">💾 Guardar</button>
            </div>
        </form>
    </div>

    <footer>
        Elaborado por: <strong>Joan Alonso Bernal Suarez</strong>
    </footer>

</body>
</html>
