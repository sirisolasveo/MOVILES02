<?php
class Mensaje extends Controller{
    function __construct(){
        parent::__construct();
        // $this->view->mensaje="";
        $this->view->end_mes="";
        $this->view->date=[];

        //echo "<p>Nuevo controlador Main</p>";
    }
    
    function render(){
        $this->view->render('mensajes/index'); 
    }

    function bandeja(){
        $dni=$_POST['dni'];
        $medidor=$_POST['medidor'];

        // $mensaje="HOLA";

        $end_mes=$this->model->get_ultimo_mes($medidor);
        //$this->view->codigo=$codigo;
        
        $date=$this->model->get_mensajes_mes($medidor,$end_mes);

        $this->view->date=$date;
       
        // $mensaje="codigo es ".$codigo;

        // $this->view->mensaje=$mensaje;
        
        $this->render();
    }
}
?>