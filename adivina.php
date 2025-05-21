<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina</title>
    <?php include 'otros/styles_css.php'; ?>
    <style>
    form {
        text-align: center;
        margin-top: 30px;
    }
    input[type="number"] {
        padding: 8px 12px;
        font-size: 16px;
        width: 100px;
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
    .resultado {
        text-align: center;
        font-weight: bold;
        margin-top: 20px;
    }
</style>

</head>
<body>

<div class="container">
    <h1>Tarea 1</h1>
    
    <?php include 'otros/menu.php'; ?>

    <h2><center>Adivina un número del 1 al 5</center></h2>

    <form method="post">
        <input type="number" name="numero" min="1" max="5" required>
        <button type="submit">Adivinar</button>
    </form>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST['numero'];
            $aleatorio = rand(1, 5);

            if ($usuario == $aleatorio) {
                echo "¡Wow, adivinaste! :)";
            } else {
                echo "¡Sigue intentando! El número era <strong>$aleatorio</strong> xD";
            }
        }
        ?>
    </div>

    <?php include 'otros/footer.php'; ?>
</div>

</body>
</html>