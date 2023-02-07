<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayPoint: Consulta de Datos</title>
    <link rel="icon" type="image/png" href="<?php echo constant('URL');?>resources/images/logos/logoControl.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Material Icons -->
</head>
<body class="bodyAdmin">
    <?php require 'views/headerAdmin.php'?>
    <div class="containerForm-vendedor">
        <h1>Sección de consulta</h1>
        <table class="table-consulta-vendedor">
            <thead>
                <tr>
                    <th class="table-cell"></th>
                    <th class="table-cell"></th>
                    <th class="table-cell-ventas" colspan="4">Ventas</th>
                    <th class="table-cell" colspan="2"></th>
                </tr>
                <tr>
                    <th class="table-cell">ID</th>
                    <th class="table-cell">Nombre</th>
                    <!-- ventas -->
                    <th class="table-cell-ventas">Cod</th>
                    <th class="table-cell-ventas">Minecraft</th>
                    <th class="table-cell-ventas">Starcraft</th>
                    <th class="table-cell-ventas">Total de Ventas</th>
                    <th class="table-cell"></th>
                    <th class="table-cell"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'models/vendedor.php';
                    foreach($this->vendedores as $row) {
                        $vendedor = new Vendedor();
                        $vendedor = $row;
                ?>
                <tr>
                    <td class="table-cell-space"><?php echo $vendedor->id;?></td>
                    <td><?php echo $vendedor->nombre;?></td>
                    <td><?php echo $vendedor->venCod;?></td>
                    <td><?php echo $vendedor->venMin;?></td>
                    <td><?php echo $vendedor->venStar;?></td>
                    <td><?php echo $vendedor->totalVentas;?></td>
                    <!-- función actualizar y editar junto a material icons -->
                    <td class="table-cell-space"><a href="<?php echo constant('URL') . 'consulta/verVendedor/' . $vendedor->id;?>"><i class="material-icons">edit</i></a></td>
                    <td class="table-cell-space"><a href="<?php echo constant('URL') . 'consulta/eliminarVendedor/' . $vendedor->id;?>"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table-consulta-vendedor">
            <thead>
                <tr>
                    <th class="table-cell"></th>
                    <th class="table-cell"></th>
                    <th class="table-cell-comisiones" colspan="5">Comisiones</th>
                    <th class="table-cell" colspan="2"></th>
                </tr>
                <tr>
                    <th class="table-cell">ID</th>
                    <th class="table-cell">Nombre</th>
                    <th class="table-cell-comisiones">Cod</th> 
                    <th class="table-cell-comisiones">Minecraft</th>
                    <th class="table-cell-comisiones">Starcraft</th>
                    <th class="table-cell-comisiones">Total comisión</th>
                    <th class="table-cell-comisiones">Mayor Comisión</th>
                    <th class="table-cell"></th>
                    <th class="table-cell"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'models/vendedor.php';
                    foreach($this->vendedores as $row) {
                        $vendedor = new Vendedor();
                        $vendedor = $row;
                ?>
                <tr>
                    <td class="table-cell-space"><?php echo $vendedor->id;?></td>
                    <td><?php echo $vendedor->nombre;?></td>
                    <td><?php echo $vendedor->comVenCod;?></td>
                    <td><?php echo $vendedor->comVenMin;?></td>
                    <td><?php echo $vendedor->comVenStar;?></td>
                    <td><?php echo $vendedor->totalComision;?></td>
                    <td><?php echo $vendedor->mayor;?></td>
                    <!-- función actualizar y editar junto a material icons -->
                    <td class="table-cell-space"><a href="<?php echo constant('URL') . 'consulta/verVendedor/' . $vendedor->id;?>"><i class="material-icons">edit</i></a></td>
                    <td class="table-cell-space"><a href="<?php echo constant('URL') . 'consulta/eliminarVendedor/' . $vendedor->id;?>"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table-consulta-vendedor">
            <thead>
                <tr>
                    <th class="table-cell"></th>
                    <th class="table-cell"></th>
                    <th class="table-cell-ganancias" colspan="3">Ganancias</th>
                    <th class="table-cell" colspan="2"></th>
                </tr>
                <tr>
                    <th class="table-cell">ID</th>
                    <th class="table-cell">Nombre</th>
                    <!-- ganancias -->
                    <th class="table-cell-ganancias">Cod</th>
                    <th class="table-cell-ganancias">Minecraft</th>
                    <th class="table-cell-ganancias">Starcraft</th>
                    <th class="table-cell"></th>
                    <th class="table-cell"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'models/vendedor.php';
                foreach($this->vendedores as $row) {
                    $vendedor = new Vendedor();
                    $vendedor = $row;
                ?>
                <tr>
                    <td class="table-cell-space"><?php echo $vendedor->id;?></td>
                    <td><?php echo $vendedor->nombre;?></td>
                    <td><?php echo $vendedor->gananciaCod;?></td>
                    <td><?php echo $vendedor->gananciaMin;?></td>
                    <td><?php echo $vendedor->gananciaStar;?></td>
                    <!-- función actualizar y editar junto a material icons -->
                    <td class="table-cell-space"><a href="<?php echo constant('URL') . 'consulta/verVendedor/' . $vendedor->id; ?>"><i class="material-icons">edit</i></a></td>
                    <td class="table-cell-space"><a href="<?php echo constant('URL') . 'consulta/eliminarVendedor/' . $vendedor->id; ?>"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>