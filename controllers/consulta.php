<?php
class Consulta extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->vendedores = [];
    }

    function render() {
        $vendedores = $this->model->get();
        $this->view->vendedores = $vendedores;
        $this->view->render('consulta/index');
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

    function verVendedor($param = null) {
        $idVendedor = $param[0];
        $vendedor = $this->model->getById($idVendedor);

        session_start();
        $_SESSION['id_verVendedor'] = $vendedor->id;
        $this->view->vendedor = $vendedor;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarVendedor($param = null) {
        session_start();
        if (isset($_SESSION['id_verVendedor'])) {
            $idVendedor = $_SESSION['id_verVendedor'];
            $id = $idVendedor;
            $nombre = $_POST['nombre'];
            $canVenCod = $_POST['canVenCod'];
            $canVenMin = $_POST['canVenMin'];
            $canVenStar = $_POST['canVenStar'];
            $comVenCod = $canVenCod*0.06*34500;
            $comVenMin = $canVenMin*0.04*8800;
            $comVenStar = $canVenStar*0.09*58200;
            $totalVentas = $canVenCod+$canVenMin+$canVenStar;
            $mayor = $this->juegoGanoMayorComision($canVenCod*0.06*34500,$canVenMin*0.04*8800,$canVenStar*0.09*58200);
            $totalComision = $canVenCod*0.06*34500+$canVenMin*0.04*8800+$canVenStar*0.09*58200;
            $gananciaCod = $canVenCod*34500;
            $gananciaMin = $canVenMin*8800;
            $gananciaStar = $canVenStar*58200;

            unset($_SESSION['id_verVendedor']);

            if($this->model->actualizar([
                'id' => $id,
                'nombre' => $nombre,
                'canVenCod' => $canVenCod,
                'canVenMin' => $canVenMin,
                'canVenStar' => $canVenStar,
                'comVenCod' => $comVenCod,
                'comVenMin' => $comVenMin,
                'comVenStar' => $comVenStar,
                'totalVentas' => $totalVentas,
                'mayor' => $mayor,
                'totalComision' => $totalComision,
                'gananciaCod' => $gananciaCod,
                'gananciaMin' => $gananciaMin,
                'gananciaStar' => $gananciaStar
                ])) {
                    $vendedor = new Vendedor();
                    $vendedor->id = $id;
                    $vendedor->nombre = $nombre;
                    $vendedor->canVenCod = $canVenCod;
                    $vendedor->canVenMin = $canVenMin;
                    $vendedor->canVenStar = $canVenStar;
                    $vendedor->comVenCod = $comVenCod;
                    $vendedor->comVenMin = $comVenMin;
                    $vendedor->comVenStar = $comVenStar;
                    $vendedor->totalVentas = $totalVentas;
                    $vendedor->mayor = $mayor;
                    $vendedor->totalComision = $totalComision;
                    $vendedor->gananciaCod = $gananciaCod;
                    $vendedor->gananciaMin = $gananciaMin;
                    $vendedor->gananciaStar = $gananciaStar;

                    $this->view->vendedor = $vendedor;
                    $this->view->mensaje = "Vendedor actualizado correctamente";
            } else {
                $this->view->mensaje = "Error al actualizar el vendedor";
            }
            $this->view->render('consulta/detalle');
        } else {
            $this->view->mensaje = "No se pudo actualizar el vendedor";
            $this->view->render('consulta/detalle');
        }
    }

    function eliminarVendedor($param = null){
        $idVendedor = $param[0];
        if($this->model->eliminar($idVendedor)){
            $this->view->mensaje = "Vendedor eliminado correctamente";
        } else {
            $this->view->mensaje = "No se pudo eliminar el vendedor";
        }
        $this->render();
    }
}
?>