<?php
class Login extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        //echo "<p>Nuevo controlador Main</p>";
                
    }
    
    function render(){
        $this->view->render('login/index');
    }


    function validarUsuarios(){
        $dni=$_POST['dni'];
        // $medidor=$_POST['medidor'];
        $clave=$_POST['clave'];

        $mensaje="";

        if($this->model->validar(['dni'=>$dni,'clave'=>$clave])){

        $mensaje="validacion corecta";

        session_start();
        
        $_SESSION['dni']=$dni;
        
        header("Location:../lista");
        }else{
        
        $mensaje="Informacion Incorrecta";
        
        }
        
        $this->view->mensaje=$mensaje;
        $this->render();
    }

}
?>