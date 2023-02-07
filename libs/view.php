<?php
class View {

    function __construct() { // Constructor de la clase
        // echo "<p>Vista</p>"; // se comenta porque no es necesario mostrarlo
    }

    function render($nombre) {
        require 'views/' . $nombre . '.php'; // se requiere la vista correspondiente
    }
}
?>