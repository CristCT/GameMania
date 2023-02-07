<?php
class Nuevo extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render() {
        $this->view->render('nuevo/index');
    }

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

    function registrarVendedor() {
        $mensaje = "";
        // isset Nom, CanVenCod, CanVenMin, CanVenStar
        if (isset($_POST['Nom']) && isset($_POST['CanVenCod']) && isset($_POST['CanVenMin']) && isset($_POST['CanVenStar'])) {
            $nom = $_POST['Nom'];
            $canVenCod = $_POST['CanVenCod'];
            $canVenMin = $_POST['CanVenMin'];
            $canVenStar = $_POST['CanVenStar'];
            $comVenCod = $canVenCod*0.06*34500;
            $comVenMin = $canVenMin*0.04*8800;
            $comVenStar = $canVenStar*0.09*58200;
            $totalVentas = $canVenCod+$canVenMin+$canVenStar;
            $mayor = $this->juegoGanoMayorComision($canVenCod*0.06*34500,$canVenMin*0.04*8800,$canVenStar*0.09*58200);
            $totalComision = $canVenCod*0.06*34500+$canVenMin*0.04*8800+$canVenStar*0.09*58200;
            $gananciaCod = $canVenCod*34500;
            $gananciaMin = $canVenMin*8800;
            $gananciaStar = $canVenStar*58200;

            if($this->model->insert(['Nom' => $nom, 'CanVenCod' => $canVenCod, 'CanVenMin' => $canVenMin, 'CanVenStar' => $canVenStar, 'ComVenCod' => $comVenCod, 'ComVenMin' => $comVenMin, 'ComVenStar' => $comVenStar, 'TotalVentas' => $totalVentas, 'Mayor' => $mayor, 'TotalComision' => $totalComision, 'GananciaCod' => $gananciaCod, 'GananciaMin' => $gananciaMin, 'GananciaStar' => $gananciaStar])) {
                $mensaje = "Vendedor registrado correctamente";
            } else {
                $mensaje = "Ya existe un vendedor con ese nombre";
            }

            $this->view->mensaje = $mensaje;
            $this->render();

        } else {
            echo "No se pudo registrar el vendedor";
        }
    }
}
?>