<?php @session_start();?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayPoint tu nuevo Hogar</title>
    <!-- fuente Roboto de Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
</head>
<body class="bodyAdmin">
  <?php require 'views/headerAdmin.php'?>
  <div class="containerForm-vendedor">
    <h1>Sección de registro</h1>
    <div class="containerForm-message"><?php echo $this->mensaje; ?></div>
    <div class="grid-content-nuevo">
      <!-- Juegos disponibles con sus Imagenes -->
      <div class="grid-items">
        <h3 class="title-section-games">Juegos Disponibles</h3>
        <div class="grid-item-body">
          <div class="grid-item-game">
            <img class="image-game" src="<?php echo constant('URL');?>resources/images/callofdutyCard.jpg" alt="cod" width="100" height="100">
            <h4>Valor: $34500</h4>
            <h4>Comisión: 6%</h4>
          </div>
          <div class="grid-item-game">
            <img class="image-game" src="<?php echo constant('URL');?>resources/images/minecraftCard.jpg" alt="min" width="100" height="100">
            <h4>Valor: $8800</h4>
            <h4>Comisión: 4%</h4>
          </div>
          <div class="grid-item-game">
            <img class="image-game" src="<?php echo constant('URL');?>resources/images/starcraftCard.jpg" alt="star" width="100" height="100">
            <h4>Valor: $58200</h4>
            <h4>Comisión: 9%</h4>
          </div>
        </div>
      </div>
      <!-- Inicio del Formulario de vendedor y ventas -->
      <div class="grid-items">
        <h3 class="title-section-games">Registrar Vendedor y Ventas</h3>
        <form action="<?php echo constant('URL');?>nuevo/registrarVendedor" method="post">
          <h4 class="text-align-left">Nombre</h4>
          <input class="input-form-vendedor" type="text" id="Nom" Name="Nom" required>
          <h4 class="text-align-left">Call of duty</h4>
          <input class="input-form-vendedor" type="text" id="CanVenCod" Name="CanVenCod" required>
          <h4 class="text-align-left">Minecraft</h4>
          <input class="input-form-vendedor" type="text" id="CanVenMin" Name="CanVenMin" required>
          <h4 class="text-align-left">Starcraft</h4>
          <input class="input-form-vendedor" type="text" id="CanVenStar" Name="CanVenStar" required>
          <div class="container-button-form">
            <button class="btn-form-vendedor" type="submit" name="mostrarMayorComision"> Insertar Vendedor </button>
          </div>
        </form>
        <button class="btn-form-vendedor btn-form-vendedor--last" onclick="location.href='<?php echo constant('URL');?>consulta'"> Mostrar la Tabla </a></button>
      </div>
    </div>
  </div>
  <?php require 'views/footer.php'?>
</body>
</html>