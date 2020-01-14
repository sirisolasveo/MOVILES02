<?php
class Reguistrar extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        //echo "<p>Nuevo controlador Main</p>";
    }
    
    function render(){
        $this->view->render('reguistrar/index');
    }
    
    function registrar(){
    	// $codigo=$_POST["codigo"];
    	// $numero=$_POST["numero_medidor"];
    	$nombre=$_POST["nombre"];
    	$apellido=$_POST["apellido"];
    	$correo=$_POST["correo"];
    	$dni=$_POST["dni"];
    	$clave=$_POST["clave"];
      $clave_confirma=$_POST["clave_confirma"]; 
      $numero_celular=$_POST["numero_celular"];

    	 $mensaje="";

      if($clave==$clave_confirma){

        if($this->model->validar(['dni'=>$dni]) && $this->model->validar_BD(['dni'=>$dni])){
          
        // $codigo=$this->model->traer_codigo($dni);
        // $numero=$this->model->traer_numero($dni);
        
        if($this->model->insert_nuevo($nombre,$apellido,$dni,$correo,$clave,$numero_celular) && $this->model->insert(['nombre'=>$nombre,'apellido'=>$apellido,'correo'=>$correo,'dni'=>$dni,'clave'=>$clave])){
          

        $mensaje="REGISTRADO CON EXITO";
        
        }else{
        
        $mensaje="ERROR AL REGISTRARSE";
        
        }

        }else{
          $mensaje="USUARIO NO DISPONIBLE";	
        }
        


        }else{
           $mensaje="LAS CONTRASEÑAS NO COINCIDEN"; 
        }

        $this->view->mensaje=$mensaje;
        $this->render();

    }


    function validarUsuarios(){
    	$codigo=$_POST['codigo'];
    	$dni=$_POST['dni'];
        $medidor=$_POST['numero_medidor'];
        

        $mensaje="";

       if($this->model->validar(['dni'=>$dni,'medidor'=>$medidor,'codigo'=>$codigo])){

       header("Location:../login");
            
       }else{
        
       $mensaje="USUARIO YA EXISTE";

       }

       $this->view->mensaje=$mensaje;
       $this->render();

    }
}
?>