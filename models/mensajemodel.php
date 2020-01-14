<?php 
include_once 'models/mensajes.php';
include_once 'models/historial.php';


 class MensajeModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    

    public function get_ultimo_mes($medidor){
      $code=0;
      $year=2018;

      try {
      $query=$this->db->connect()->query("SELECT MAX(numero) AS mes FROM `historial` WHERE nombre='$medidor';;");
      
      while ($row=$query->fetch()){
          $item=new Historiales;
          $item->mes=$row['mes'];
          
          $code=$item->mes;
          // array_push($items,$item);
        // $this->view->mensaje=$mensajee;

      }
        return $code;
      } catch (PDOException $e) {
        return "no"; 
      }
      
    }
    
    public function get_mensajes_mes($medidor,$end_mes){
       $items=[];

      try {
      $query=$this->db->connect()->query("SELECT * FROM `bandeja` WHERE `medidor`='$medidor' and numero='$end_mes';");
      
      while ($row=$query->fetch()){
          $item=new Mensajesis();
          $item->estado=$row['estado'];
          $item->fecha=$row['fecha'];
          $item->mensaje=$row['mensaje'];
          
          
          array_push($items,$item);
      }
        return $items;
      } catch (PDOException $e) {
        return []; 
      }
    }


 }
?>