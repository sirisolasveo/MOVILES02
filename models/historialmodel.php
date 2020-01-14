<?php 
include_once 'models/historial.php';
include_once 'models/consumo.php';

 class HistorialModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    
    public function validafecha($datos){

       try {
    		   

$query=$this->db->connect()->prepare('SELECT * FROM `historial` WHERE year=:year AND mes=:mes AND nombre=:medidor;');

		       $query->execute(['year'=>$datos['year'],'mes'=>$datos['mes'],'medidor'=>$datos['medidor']]);


              $respuesta=$query->rowCount();
              
              if ($respuesta==1) {
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

    public function get($year,$medidor){
      $items=[];

      try {
      $query=$this->db->connect()->query("SELECT * FROM historial WHERE nombre='$medidor' and year='$year';");
      
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

    public function get_mes($year,$mes,$medidor){
      $items=[];

      try {
      $query=$this->db->connect()->query("SELECT * FROM historial WHERE year='$year' and mes='$mes' and nombre='$medidor';");
      
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

    //  public function get_codigo($dni){
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

 }
?>