<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventarios - Droguería</title>
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
            padding: 40px 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .menu {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 60px auto;
            flex-wrap: wrap;
        }

        .menu a {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 220px;
            height: 180px;
            background: white;
            color: #2e7d32;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .menu a:hover {
            background: #4CAF50;
            color: white;
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.25);
        }

        .menu a i {
            font-size: 50px;
            margin-bottom: 15px;
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
            .menu {
                flex-direction: column;
                gap: 20px;
            }
            .menu a {
                width: 180px;
                height: 140px;
                font-size: 16px;
            }
            .menu a i {
                font-size: 40px;
            }
        }
    </style>
    <!-- Íconos (FontAwesome CDN) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <h1>💊 Gestión de Inventarios - Droguería</h1>
    </header>

    <div class="menu">
        <a href="{{ route('productos.index') }}">
            <i class="fas fa-capsules"></i>
            Gestionar Productos
        </a>
        <a href="{{ route('ventas.index') }}">
            <i class="fas fa-shopping-cart"></i>
            Gestionar Ventas
        </a>
    </div>

    <footer>
        Elaborado por: <strong>Joan Alonso Bernal Suarez</strong>
    </footer>

</body>
</html>
