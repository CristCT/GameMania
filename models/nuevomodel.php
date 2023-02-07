<?php
class NuevoModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    // Inserta un nuevo registro en la tabla vendedores
    public function insert($datos) {
        try {
            $query = $this->db->connect()->prepare('INSERT INTO vendedores (nombre, CanVenCod, CanVenMin, CanVenStar, ComVenCod, ComVenMin, ComVenStar, TotalVentas, Mayor, TotalComision, GananciaCod, GananciaMin, GananciaStar)
            VALUES (:Nom, :CanVenCod, :CanVenMin, :CanVenStar, :ComVenCod, :ComVenMin, :ComVenStar, :TotalVentas, :Mayor, :TotalComision, :GananciaCod, :GananciaMin, :GananciaStar)');
            $query->execute([
                'Nom' => $datos['Nom'], 'CanVenCod' => $datos['CanVenCod'],
                'CanVenMin' => $datos['CanVenMin'], 'CanVenStar' => $datos['CanVenStar'], 'ComVenCod' => $datos['ComVenCod'],
                'ComVenMin' => $datos['ComVenMin'], 'ComVenStar' => $datos['ComVenStar'], 'TotalVentas' => $datos['TotalVentas'],
                'Mayor' => $datos['Mayor'], 'TotalComision' => $datos['TotalComision'], 'GananciaCod' => $datos['GananciaCod'],
                'GananciaMin' => $datos['GananciaMin'], 'GananciaStar' => $datos['GananciaStar']]);
            return true;
        } catch (PDOException $e) {
            echo "Ya existe un vendedor con ese id";
            return false;
        }
    }
}
?>