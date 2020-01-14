<?php
class Historial extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        $this->view->codigo="";
        $this->view->historial=[];
    }
    
    function render(){
        $this->view->render('historial/index');
    }
    
    function renderinfo(){
        $dni=$_POST["dni"];
        $medidor=$_POST["medidor"];


        $mes=$_POST['mes'];
        $year=$_POST['year'];        
        
        $mensaje="";
        
        //obtenr cogigo por dni
        // $codigo=$this->model->get_codigo($dni);


        if ($mes=='TODO EL AÑO') {     

        $historial=$this->model->get($year,$medidor);
        $this->view->historial=$historial;
        $mensaje="REPORTE ANUAL";        

        
        }else{
          
        if($this->model->validafecha(['year'=>$year,'mes'=>$mes,'medidor'=>$medidor])){
       
        $historial=$this->model->get_mes($year,$mes,$medidor);
        $this->view->historial=$historial;

        $mensaje="MES DE ".$mes." FACTURADO";

        }else{
       
        $mensaje="MES DE ".$mes." NO FACTURADO";
        
        } 

           // $mensaje="MES DE ".$mes;  
        }
        
        $this->view->mensaje=$mensaje;
        $this->render();
    }

    // function mostrarHistorial(){
    //     $year=$_POST['year'];
    //     $mes=$_POST['mes'];
       
    //     $mensaje="";

    //     if ($mes=='TODO EL AÑO') {
            
    //     //$respuesta_year="hola";
    //      $mensaje="todo un año";  

    //      //$this->renderinfo($year);

    //     }else{

    //     if($this->model->validafecha(['year'=>$year,'mes'=>$mes])){

    //     $mensaje="mes facturado";

    //     //$mensaje="mes faturado";
    //     //header("Location:../informacion");
    //     }else{
        
    //     $mensaje="mes no facturado";
        
    //     }
        
    //     }
    //     $this->view->mensaje=$mensaje;
    //     $this->render();

    // }



    // function mostrar_todo($year){
    //   return "todo el año";
    // }

    // function mostra($mes){
    //   return "solo un mes";
    // }

    

}
?>