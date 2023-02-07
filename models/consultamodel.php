<?php
include_once 'models/vendedor.php';

class consultaModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function get() {
        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT * FROM vendedores');
            while ($row = $query->fetch()) {
                $item = new Vendedor();
                // hace set de cada atributo del objeto
                if (isset($row['id'])) {
                    $item->id = $row['id'];
                } else {
                    $item->id = null; }
                if (isset($row['nombre'])) {
                    $item->nombre = $row['nombre'];
                } else {
                    $item->nombre = null; }
                if (isset($row['CanVenCod'])) {
                    $item->venCod = $row['CanVenCod'];
                } else {
                    $item->venCod = null; }
                if (isset($row['CanVenMin'])) {
                    $item->venMin = $row['CanVenMin'];
                } else {
                    $item->venMin = null; }
                if (isset($row['CanVenStar'])) {
                    $item->venStar = $row['CanVenStar'];
                } else {
                    $item->venStar = null; }
                if (isset($row['ComVenCod'])) {
                    $item->comVenCod = $row['ComVenCod'];
                } else {
                    $item->comVenCod = null; }
                if (isset($row['ComVenMin'])) {
                    $item->comVenMin = $row['ComVenMin'];
                } else {
                    $item->comVenMin = null; }
                if (isset($row['ComVenStar'])) {
                    $item->comVenStar = $row['ComVenStar'];
                } else {
                    $item->comVenStar = null; }
                if (isset($row['TotalVentas'])) {
                    $item->totalVentas = $row['TotalVentas'];
                } else {
                    $item->totalVentas = null; }
                if (isset($row['Mayor'])) {
                    $item->mayor = $row['Mayor'];
                } else {
                    $item->mayor = null; }
                if (isset($row['TotalComision'])) {
                    $item->totalComision = $row['TotalComision'];
                } else {
                    $item->totalComision = null; }
                if (isset($row['GananciaCod'])) {
                    $item->gananciaCod = $row['GananciaCod'];
                } else {
                    $item->gananciaCod = null; }
                if (isset($row['GananciaMin'])) {
                    $item->gananciaMin = $row['GananciaMin'];
                } else {
                    $item->gananciaMin = null; }
                if (isset($row['GananciaStar'])) {
                    $item->gananciaStar = $row['GananciaStar'];
                } else {
                    $item->gananciaStar = null; }

                array_push($items, $item); // se agrega el item a un arreglo
            }
            return $items;

        } catch(PDOException $e) {
            return [];
        }
    }

    public function getById($id) {
        $item = new Vendedor();
        $query = $this->db->connect()->prepare('SELECT * FROM vendedores WHERE id = :id');
        try {
            // hace set del ID del objeto
            if (isset($id)){
                $query->execute(['id' => $id]);
                while ($row = $query->fetch()) {
                    if (isset($row['id'])) { // si existe el campo 'id' se hace set del atributo
                        $item->id = $row['id'];
                        $item->nombre = $row['nombre'];
                        $item->canVenCod = $row['CanVenCod'];
                        $item->canVenMin = $row['CanVenMin'];
                        $item->canVenStar = $row['CanVenStar'];
                        $item->comVenCod = $row['ComVenCod'];
                        $item->comVenMin = $row['ComVenMin'];
                        $item->comVenStar = $row['ComVenStar'];
                        $item->totalVentas = $row['TotalVentas'];
                        $item->mayor = $row['Mayor'];
                        $item->totalComision = $row['TotalComision'];
                        $item->gananciaCod = $row['GananciaCod'];
                        $item->gananciaMin = $row['GananciaMin'];
                        $item->gananciaStar = $row['GananciaStar'];
                    } else { // si no existe el campo nombre se le asigna null
                        $item->id = null;
                        $item->nombre = null;
                        $item->canVenCod = null;
                        $item->canVenMin = null;
                        $item->canVenStar = null;
                        $item->comVenCod = null;
                        $item->comVenMin = null;
                        $item->comVenStar = null;
                        $item->totalVentas = null;
                        $item->mayor = null;
                        $item->totalComision = null;
                        $item->gananciaCod = null;
                        $item->gananciaMin = null;
                        $item->gananciaStar = null;
                    }
                }
            } else {
                $query->execute();
            }
            return $item;
        } catch(PDOException $e) {
            return null;
        }
    }

    // Actualiza el registro seleccionado en la tabla vendedores
    public function actualizar($item) {
        $query = $this->db->connect()->prepare('UPDATE vendedores SET nombre = :nombre, CanVenCod = :canVenCod, CanVenMin = :canVenMin, CanVenStar = :canVenStar, ComVenCod = :comVenCod, ComVenMin = :comVenMin, ComVenStar = :comVenStar, TotalVentas = :totalVentas, Mayor = :mayor, TotalComision = :totalComision, GananciaCod = :gananciaCod, GananciaMin = :gananciaMin, GananciaStar = :gananciaStar WHERE id = :id');
        try {
            $query->execute([
                'id' => $item['id'],
                'nombre' => $item['nombre'],
                'canVenCod' => $item['canVenCod'],
                'canVenMin' => $item['canVenMin'],
                'canVenStar' => $item['canVenStar'],
                'comVenCod' => $item['comVenCod'],
                'comVenMin' => $item['comVenMin'],
                'comVenStar' => $item['comVenStar'],
                'totalVentas' => $item['totalVentas'],
                'mayor' => $item['mayor'],
                'totalComision' => $item['totalComision'],
                'gananciaCod' => $item['gananciaCod'],
                'gananciaMin' => $item['gananciaMin'],
                'gananciaStar' => $item['gananciaStar']
            ]);
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    // Elimina el registro seleccionado en la tabla vendedores
    public function eliminar($id) {
        $query = $this->db->connect()->prepare('DELETE FROM vendedores WHERE id = :id');
        try {
            $query->execute(['id' => $id]);
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
}
?>