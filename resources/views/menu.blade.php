<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventarios</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-top: 50px;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .menu {
            display: flex;
            gap: 30px;
            margin-top: 50px;
        }

        .menu a {
            display: block;
            width: 200px;
            height: 150px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            line-height: 150px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .menu a:hover {
            background: #45a049;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        @media (max-width: 500px) {
            .menu {
                flex-direction: column;
                gap: 20px;
            }
            .menu a {
                width: 150px;
                height: 120px;
                line-height: 120px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <h1>Gestión de Inventarios</h1>

    <div class="menu">
        <a href="{{ route('productos.index') }}">Gestionar Productos</a>
        <a href="{{ route('ventas.index') }}">Gestionar Ventas</a>
    </div>

</body>
</html>
