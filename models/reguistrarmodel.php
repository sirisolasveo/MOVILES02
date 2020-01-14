<?php 
include_once 'models/bd_usuarios.php';

 class ReguistrarModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    
    public function validar($datos){

       try {
    		
$query=$this->db->connect()->prepare('SELECT * FROM `usuarios` WHERE dni=:dni');

		       $query->execute(['dni'=>$datos['dni']]);


              $rvc=$query->rowCount();
              
              if ($rvc==0) {
                 return true;	          
               }else{
                  return false;
               }

    	} catch (PDOException $e) {
    		// echo "ya existe la matricula";
    		return false;
    	}	
    $this->view->mensaje=$mensaje;

    }

    
    public function validar_BD($datos){

       try {
        
$query=$this->db->connect()->prepare('SELECT * FROM `data` WHERE DNI=:dni');

           $query->execute(['dni'=>$datos['dni']]);


              $rvc=$query->rowCount();
              
              if ($rvc==1) {
                 return true;           
               }else{
                  return false;
               }

      } catch (PDOException $e) {
        // echo "ya existe la matricula";
        return false;
      } 
    $this->view->mensaje=$mensaje;

    }
    
   //  public function traer_codigo($dni){
   //    $codigo="";
   //    try {
   //    $query=$this->db->connect()->query("SELECT COD_USUARIO FROM bd_usuario WHERE DNI='$dni';");
      
   //    while ($row=$query->fetch()){
   //        $item=new BD_Usuarios();
   //        $item->codigo=$row['COD_USUARIO'];
   //        $codigo=$item->codigo;
   //    }
   //      return $codigo;
   //    } catch (PDOException $e) {
         
   //    }
   //  }

   // public function traer_numero($dni){
   //    $numero="";
   //    try {
   //    $query=$this->db->connect()->query("SELECT NRO_MEDIDOR FROM bd_usuario WHERE DNI='$dni';");
      
   //    while ($row=$query->fetch()){
   //        $item=new BD_Usuarios();
   //        $item->numero=$row['NRO_MEDIDOR'];
   //        $numero=$item->numero;
   //    }
   //      return $numero;
   //    } catch (PDOException $e) {
         
   //    }
   //  }

    public function insert($datos){

       try {
        
     $query=$this->db->connect()->prepare('INSERT INTO usuarios(nombres,apellidos,dni,correo,clave) VALUES(:nombre,:apellido,:dni,:correo,:clave)');

           $query->execute(['nombre'=>$datos['nombre'],'apellido'=>$datos['apellido'],'correo'=>$datos['correo'],'dni'=>$datos['dni'],'clave'=>$datos['clave']]);

           return true;       

      } catch (PDOException $e) {
        // echo "ya existe la matricula";
        return false;
      } 
    $this->view->mensaje=$mensaje;

    }
    

   
   public function insert_nuevo($nombre,$apellido,$dni,$correo,$clave,$numero_celular){

       try {
        
           $fecha=date("Y-m-d");

     $query=$this->db->connect()->query("INSERT INTO nuevos_usuarios(nombres,apellidos,dni,correo,clave,numero_celular,fecha) VALUES('$nombre','$apellido','$dni','$correo','$clave','$numero_celular','$fecha')");
          
  
           return true;       

      } catch (PDOException $e) {
        // echo "ya existe la matricula";
        return false;
      } 
    // $this->view->mensaje=$mensaje;

    }
 }
?>