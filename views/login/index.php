<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayPoint tu nuevo Hogar</title>
    <!-- fuente Roboto de Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
</head>
<!-- formulario con usuario, password y un botón de login que envia a programaVendedor.php si la usuario y password es admin -->
<body class="bodyLogin">
    <?php require 'views/header.php'?>
    <div class="containerForm-login">
        <div class="fondoFormLogin">
            <div class="card-login">
                <h4 class="title-login">INICIAR SESIÓN</h4>
                <!-- valida el formulario, si el usuario es 'admin' se permite acceso -->
                <?php
                    if (isset($_POST['usuario']) && isset($_POST['password'])) {
                        if ($_POST['usuario'] == 'admin' && $_POST['password'] == 'admin') {
                            header('Location: '.constant('URL').'nuevo');
                        } else {
                            echo '<div class="alert-danger">Usuario o contraseña incorrectos</div>';
                        }
                    }
                ?>
                <form class="form-signin" action="<?php echo constant('URL');?>login" method="POST">
                    <div class="form-label-group">
                        <label class="text-login" for="inputEmail">Usuario</label>
                        <input class="input-login" type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus name="usuario">
                        <label class="text-login" for="inputPassword">Contraseña</label>
                        <input class="input-login" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="password">
                        <button class="btn-form-login" type="submit">Iniciar Sesión</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
    <?php require 'views/footer.php'?>
</body>







