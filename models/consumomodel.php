<?php 
include_once 'models/consumo.php';
include_once 'models/historial.php';


 class ConsumoModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    

    // public function get($dni){
    //   $code=0;

    //   try {
    //   $query=$this->db->connect()->query("SELECT codigo FROM usuarios WHERE dni='$dni';");
      
    //   while ($row=$query->fetch()){
    //       $item=new Consumos;
    //       $item->codigo=$row['codigo'];
          
    //       $code=$item->codigo;
    //       // array_push($items,$item);
    //   }
    //     return $code;
    //   } catch (PDOException $e) {
    //     return "no"; 
    //   }
    // }
    
       public function get_mes_actual($medidor){
       $items=[];

      try {
      $query=$this->db->connect()->query("SELECT * FROM historial WHERE nombre='$medidor' ORDER BY numero;");
      
      while ($row=$query->fetch()){
          $item=new Historiales();
          $item->year=$row['year'];
          $item->mes=$row['mes'];
          $item->m3=$row['m3'];
          $item->saldo=$row['saldo'];
          
          
          array_push($items,$item);
      }
        return $items;
      } catch (PDOException $e) {
        return []; 
      }
    }


 }
?>