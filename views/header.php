<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/default.css">
</head>
<body>
    <div class="container-navbar">
        <!-- muestra el logo disponible de la pagina  -->
        <img class="logo-laptop" src="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
        <!-- muestra el logo en screen mobile, para ello se ocultará usando css -->
        <div class="container-navbar-mobile">
            <img class="logo-mobile" src="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
            <h1 id="h1-navbar-mobile">WAYPOINT</h1>
        </div>
        <nav id="navbar-links">
            <ul>
                <li><a href="<?php echo constant('URL');?>main">Inicio</a></li>
                <li><a href="<?php echo constant('URL');?>login">Iniciar sesion/Login</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>