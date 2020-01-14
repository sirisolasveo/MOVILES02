<?php
class Cerrar extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        //echo "<p>Nuevo controlador Main</p>";
    }
    
    function render(){
        $this->view->render('cerrar/index');
    }

    
  }
?>