<?php 
Class App {
    
    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null; // si no hay url, se le asigna null
        $url = rtrim($url, '/'); // se elimina el '/' del final de la url
        $url = explode('/', $url);

        // Cuando se ingresa sin definir controlador
        if (empty($url[0])){ // si no hay controlador
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) { // si existe el controlador
            require_once $archivoController;

            // inicializa el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // Elementos del Arreglo
            $nparam = sizeof($url);

            if ($nparam > 1) {
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]); // se agrega el parametro a un arreglo
                    }
                    $controller->{$url[1]}($param);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render(); // se renderiza la vista
            }
            
        } else {
            require_once 'controllers/error.php';
            $controller = new ErrorPage(); // se carga el controlador de error
        }
    }
}
?>