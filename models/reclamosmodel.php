<?php 
 
 class ReclamosModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    
    public function insert($datos){
       
       $fecha=date("Y-m-d");

       try {
    		
		 $query=$this->db->connect()->prepare('INSERT INTO bandeja_operario(dni,medidor,fecha,asunto,mensaje) VALUES(:dni,:medidor,:fecha,:asunto,:mensaje)');
		       $query->execute(['dni'=>$datos['dni'],'fecha'=>$fecha,'medidor'=>$datos['medidor'],'asunto'=>$datos['asunto'],'mensaje'=>$datos['descripcion']]);

           return true;		    

    	} catch (PDOException $e) {
    		// echo "ya existe la matricula";
    		return false;
    	}	
    $this->view->mensaje=$mensaje;

    }

    public function envia_gmail($dni,$email,$mensaje,$archivo){

         require("archivosformulario/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $email;
    $mail->FromName = $dni; 
    $mail->AddAddress("sirisolasveo@gmail.com"); // Dirección a la que llegaran los mensajes.  
                       
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "DNI: $dni \n<br />".    
    "Email: $email \n<br />".    
    "Mensaje: $mensaje \n<br />";
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "sirisolasveo@gmail.com";  // Correo Electrónico
    $mail->Password = "romariovegaccorimanya"; // Contraseña
    
    if ($mail->Send()){
        return true;
    }else{
        return false;
    }
    

    }



 }
    
?>