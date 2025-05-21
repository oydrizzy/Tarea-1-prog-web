<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acerca de mi</title>
    <?php include 'styles_css.php'; ?>
    <style>
        .perfil {
            text-align: center;
            margin-top: 20px;
        }
        .perfil img {
            width: 120px;
            height: 120px;
            border-radius: 10px;
            object-fit: cover;
        }
       .links {
    margin-top: 15px;
    text-align: center;
}
.links a {
    margin: 0 10px;
    display: inline-block;
}
.links img {
    width: 48px;
    height: 48px;
    transition: transform 0.2s ease;
}
.links img:hover {
    transform: scale(1.1);
}
        .video {
            margin-top: 30px;
            text-align: center;
        }
        iframe {
            width: 100%;
            max-width: 560px;
            height: 315px;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tarea 1</h1>

    <?php include 'menu.php'; ?>

    <div class="perfil">
        <h2>Rolando Paulino</h2>
        <img draggable="false" src="yo.jpg" alt="yo">

        <div class="links">
    <a href="https://t.me/xlpaulino" target="_blank">
        <img draggable="false" src="https://static.cdnlogo.com/logos/t/57/telegram-2019.svg">
    </a>
    <a href="https://wa.me/+18092201111" target="_blank">
        <img draggable="false" src="https://img.icons8.com/?size=512&id=16713&format=png">
    </a>
</div>

    </div>

    <div class="video">
        <h3>Video recomendado</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/tE6jV8SLzNo?si=qT5ZhlZ4KcLdhUQi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
    <?php include 'footer.php'; ?>

</body>
</html>
