<?php

class Errore extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error genérico rvc";
        $this->view->render('error/index');
        //echo "<p>Error al cargar recurso</p>";
    }
}

?>