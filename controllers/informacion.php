<?php
class Informacion extends Controller{
    function __construct(){
        parent::__construct();
        // $this->view->tipo="";
    }
    
    // function render(){
    //     $this->view->render('informacion/index');        
    // }

    function render(){

        $usuarios=$this->model->get();
        $this->view->usuarios=$usuarios;
        // $bd_usuario=$this->model->get_tipo();
        // $this->view->bd_usuario=$bd_usuario;
        $this->view->render('informacion/index');
    }


}
?>