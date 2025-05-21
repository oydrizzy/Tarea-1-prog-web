<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <?php include 'styles_css.php' ?>
    <style>
        .resultado {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }
        .error {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
            color: red;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 8px;
        }
        input, select, button {
            margin: 10px 0;
            width: 100%;
        }
         button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>

<div class="container">
    <h1>Tarea 1</h1>

    <?php include 'menu.php' ?>
        <center><h2>Calculadora</h2></center>

    <form method="post">
        <label>Número 1:
            <input type="number" name="num1" required step="any">
        </label>

        <label>Número 2:
            <input type="number" name="num2" required step="any">
        </label>

        <label>Operación:
            <select name="operacion" required>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
        </label>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = (float) $_POST["num1"];
        $num2 = (float) $_POST["num2"];
        $op = $_POST["operacion"];
        $resultado = 0;

        switch ($op) {
            case "sumar":
                $resultado = $num1 + $num2;
                echo "<div class='resultado'>Resultado: $resultado</div>";
                break;
            case "restar":
                $resultado = $num1 - $num2;
                echo "<div class='resultado'>Resultado: $resultado</div>";
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                echo "<div class='resultado'>Resultado: $resultado</div>";
                break;
            case "dividir":
                if ($num2 == 0) {
                    echo "<div class='error'>Error: No se puede dividir entre cero.</div>";
                } else {
                    $resultado = $num1 / $num2;
                    echo "<div class='resultado'>Resultado: $resultado</div>";
                }
                break;
        }
    }
    ?>

    <?php include 'footer.php' ?>
</div>
</body>
</html>
