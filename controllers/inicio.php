<?php
class Inicio extends Controller{
    function __construct(){
        parent::__construct();
        //echo "<p>Nuevo controlador Main</p>";
    }
    
    // function render(){
    //     $this->view->render('informacion/index');        
    // }

    function render(){
        // $usuarios=$this->model->get();
        // $this->view->usuarios=$usuarios;
        $this->view->render('inicio/index');

    }


}
?>