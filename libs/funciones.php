<?php
  // funciones para alimentar tablas
  function juegoGanoMayorComision($canVenCod,$canVenMin,$canVenStar) { //Funcion para mostrar el juego más vendido, recibe la cantidad de ventas de cada juego
    $canVenCod = $canVenCod;
    $canVenMin = $canVenMin;
    $canVenStar = $canVenStar;
    $juegoMasVendido = "";

    // calcula cual es mayor y cambiar juegoMasVendido por el nombre del juego que mas se vendio
    if ($canVenCod > $canVenMin && $canVenCod > $canVenStar) {
      $juegoMasVendido = "Cod";
      $juegoMasVendidoID = 1;
    } elseif ($canVenMin > $canVenCod && $canVenMin > $canVenStar) {
      $juegoMasVendido = "Minecraft";
      $juegoMasVendidoID = 2;
    } elseif ($canVenStar > $canVenCod && $canVenStar > $canVenMin) {
      $juegoMasVendido = "Starcraft";
      $juegoMasVendidoID = 3;
    }
    // return $juegoMasVendidoID; // por si se requiere el ID del juego mas vendido
    return $juegoMasVendido;
  }
?>