<?php
class Consumo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        $this->view->codigo="";
        $this->view->date=[];

        //echo "<p>Nuevo controlador Main</p>";
    }
    
    function render(){
        $this->view->render('consumo/index'); 
    }

    function mes_actual(){
        $dni=$_POST['dni'];
        $medidor=$_POST['medidor'];
        
        $mensaje="";

        // $codigo=$this->model->get($dni);
        //$this->view->codigo=$codigo;
        
        $date=$this->model->get_mes_actual($medidor);

        $this->view->date=$date;
      
        $mensaje="ULTIMO MES";

        $this->view->mensaje=$mensaje;
        $this->render();
    }
}
?>