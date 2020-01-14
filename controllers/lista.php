<?php
class Lista extends Controller{
    function __construct(){
        parent::__construct();
        // $this->view->tipo="";
    }
    
    // function render(){
    //     $this->view->render('informacion/index');        
    // }

    function render(){
        $usuarios=$this->model->get_usuarios();
        $this->view->usuarios=$usuarios;
        // $bd_usuario=$this->model->get_tipo();
        // $this->view->bd_usuario=$bd_usuario;
        $this->view->render('lista/index');
    }
    
    function redirec(){

        $dni=$_POST["dni"];
        $secuencia=$_POST["secuencia"];    

        //OBTENER MEDIDOR DE POR SECUENCIA
        $medidor=$this->model->get_medidor($dni,$secuencia);

        session_start();
        
        $_SESSION['dni']=$dni;
        $_SESSION['medidor']=$medidor;

        header("Location:../informacion");

        // $this->view->mensaje=$mensaje;
        $this->render();
    }
   
}
?>