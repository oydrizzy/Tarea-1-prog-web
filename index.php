<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .menu {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .menu h1 {
            margin-bottom: 20px;
        }
        .menu a {
            display: block;
            margin: 10px 0;
            text-decoration: none;
            color: rgb(148 42 180);
            font-weight: bold;
        }
        .menu a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h1>Menú</h1>
        <a href="mi_tarjeta.php">Mi Tarjeta</a>
        <a href="calculadora.php">Calculadora</a>
        <a href="adivina.php">Adivina</a>
        <a href="acerca_de.php">Acerca de mi</a>
    </div>
</body>
</html>
