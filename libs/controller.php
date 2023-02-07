<?php
class Controller {
    
    function __construct() { // Constructor de la clase
        $this->view = new View();
    }

    function loadModel($model) { // carga el modelo correspondiente
        $url = 'models/' . $model . 'model.php';
        if (file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }

}
?>