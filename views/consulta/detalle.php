<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayPoint: Detalle</title>
    <link rel="icon" type="image/png" href="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
</head>
<body class="bodyAdmin">
    <?php require 'views/headerAdmin.php';?>
    <?php
      if (!isset($this->vendedor->id)) {
        echo "<h1 class='containerForm-message'>No se encontro el vendedor</h1>";
      } else {
        ?>
        <div class="containerForm-vendedor">
          <h1>Detalles de <?php echo $this->vendedor->nombre;?></h1>
          <div class="containerForm-message"><?php echo $this->mensaje;?></div>
            <div class="grid-content-nuevo grid-content-detail">
              <form action="<?php echo constant('URL');?>consulta/actualizarVendedor/" method="post">
                <h4 class="text-align-left">ID</h4>
                <input class="input-form-vendedor" disabled type="number" name="id" value="<?php echo $this->vendedor->id;?>">
                <h4 class="text-align-left">Nombre</h4>
                <input class="input-form-vendedor" type="text" name="nombre" value="<?php echo $this->vendedor->nombre;?>">
                <h4 class="text-align-left">Call of duty</h4>
                <input class="input-form-vendedor" type="text" name="canVenCod" value="<?php echo $this->vendedor->canVenCod;?>">
                <h4 class="text-align-left">Minecraft</h4>
                <input class="input-form-vendedor" type="text" name="canVenMin" value="<?php echo $this->vendedor->canVenMin;?>">
                <h4 class="text-align-left">Starcraft</h4>
                <input class="input-form-vendedor" type="text" name="canVenStar" value="<?php echo $this->vendedor->canVenStar;?>">
                <button class="btn-form-vendedor" type="submit" name="mostrarMayorComision">Actualizar Vendedor</button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
    <?php require 'views/footer.php'?>
</body>
</html>