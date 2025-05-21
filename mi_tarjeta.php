<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi tarjeta</title>
    <?php include 'otros/styles_css.php'; ?>
    <style>
        .tarjeta {
            max-width: 400px;
            margin: 30px auto;
            padding: 20px;
            background: #f5f5f5;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: left;
        }

        .tarjeta h2 {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .tarjeta p {
            margin: 10px 0;
            padding: 8px;
            border-bottom: 1px dashed #bbb;
        }

        .tarjeta p:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tarea 1</h1>

    <?php include 'otros/menu.php'; ?>

    <?php
        $nombre = "Rolando";
        $apellido = "Paulino";
        $edad = 20;
        $carrera = "Desarrollo de Software";
        $universidad = "ITLA";
    ?>

    <div class="tarjeta">
        <h2>Mi Tarjeta</h2>
        <p><strong>Nombre:</strong> <?= $nombre . " " . $apellido ?></p>
        <p><strong>Edad:</strong> <?= $edad ?></p>
        <p><strong>Carrera:</strong> <?= $carrera ?></p>
        <p><strong>Universidad:</strong> <?= $universidad ?></p>
        <p><strong>
            <?php
                if ($edad >= 18) {
                    echo "Eres mayor de edad.";
                } else {
                    echo "Eres menor de edad.";
                }
            ?>
        </strong></p>
    </div>

    <?php include 'otros/footer.php'; ?>
</div>

</body>
</html>