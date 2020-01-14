<?php
class Reclamos extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";

    }
    
    function render(){
        $this->view->render('reclamos/index');        
    }


    function evalua(){
        $tipo=$_POST["tipo"];

        if($tipo=="MENSAJE NORMAL"){

        $this->view->render('reclamos/normal');        
        }else{

        $this->view->render('reclamos/email');        
        }
    }

    function manda_mensaje(){
        $dni=$_POST['dni'];
        $medidor=$_POST['medidor'];
        

        // $fecha=$_POST['fecha'];
        $asunto=$_POST['asunto'];
        $descripcion=$_POST['descripcion'];
       
         $mensaje="";

        if($this->model->insert(['dni'=>$dni,'medidor'=>$medidor,'asunto'=>$asunto,'descripcion'=>$descripcion])){
            
        $mensaje="MENSAJE ENVIADO CON EXITO";
        }else{
        $mensaje="ERRROR AL ENVIAR EL MENSAJE";
        }
        $this->view->mensaje=$mensaje;
        $this->render();
    }

    function manda_email(){
        $dni=$_POST['dni'];
        $email=$_POST['email'];
        $mensaje=$_POST['mensaje'];
        $archivo =$_FILES['adjunto'];
       
        $mensaje="";

        if($dni=='' || $email==''){
            
        $mensaje="EXISTEN CAMPOS VACIOS";

        }else{

        if ($this->model->envia_gmail($dni,$email,$mensaje,$archivo)) {
        $mensaje="ENVIO CON EXITO EL MENSAJE";        
        }else{
        $mensaje="ENVIO SIN EXITO EL MENSAJE";
        }

        }
        
        $this->view->mensaje=$mensaje;
        $this->render();
    }

}
?>