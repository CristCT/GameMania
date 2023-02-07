<?php
class Main extends Controller {

    function __construct() {
        parent::__construct();
    }

    function render() {
        $this->view->render('main/index');
    }

    function index() {
        echo "<p>Accion index en Main</p>";
    }

}
?>