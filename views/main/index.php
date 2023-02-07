<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayPoint tu nuevo Hogar</title>
    <!-- fuente Roboto de Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
</head>
<body>
    <?php require 'views/header.php'?>
    <!-- agrupa titulo y parrafo en la introducción de la pagina principal  -->
    <section class="intro-page">
        <h1 class="intro-page-title">Nuestra Historia</h1>
        <p class="intro-page-paragraph">Se caracteriza por una excelencia en el trato a la hora de ofrecer videojuegos, además de que historicamente hemos contamos con la participación de grandes titulos de la actualidad, Estos son Call of Duty el cual es un Shooter, Starcraft que es de estrategia y Minecraft que es un juego de mundo abierto.
        </p>
        <!-- botón que envia a la vista login usando -->
        <button class="btn-go-login" onclick="location.href='<?php echo constant('URL');?>login'">Iniciar Sesión!</button>
    </section>
    <!-- sección para mantener juntas las "Card" (Imagen, texto, link) -->
    <section class="container-card-game">
        <h2 class="title-card">Juegos Populares</h2>
        <div class="card-game">
            <h4 id="title-card-game">Call of Duty</h4>
            <a href="https://www.callofduty.com/es">
                <img class="image-static" src="resources/images/callofdutyCard.jpg" alt="game_card">
            </a>
        </div>
        <div class="card-game">
            <h4 id="title-card-game">Minecraft</h4>
            <a href="https://www.minecraft.net/es-es">
                <img class="image-static" src="resources/images/minecraftCard.jpg" alt="game_card">
            </a>
        </div>
        <div class="card-game">
            <h4 id="title-card-game">Starcraft</h4>
            <a href="https://starcraft2.com/es-es/">
                <img class="image-static" src="resources/images/starcraftCard.jpg" alt="game_card">
            </a>
        </div>
    </section>
    <?php require 'views/footer.php'?>
</body>
</html>