<?php 
 include_once 'models/bd_usuarios.php';

 class ListaModel extends Model{
 	
 	public function __construct(){
 		parent::__construct();
 	}
    
  public function get_usuarios(){

      $items=[];

      try {
      $query=$this->db->connect()->query("SELECT  COUNT(nombre) AS CANTIDAD,DNI FROM data,medidor WHERE data.DNI=medidor.id GROUP BY DNI;");
      
      while ($row=$query->fetch()){
          $item=new BD_Usuarios();
          $item->cantidad=$row['CANTIDAD'];
          $item->dni=$row['DNI'];
                   
          array_push($items,$item);
      }
        return $items;
      } catch (PDOException $e) {
        return []; 
      }
    }
    
    public function get_medidor($dni,$secuencia){
      $medidor="";
      try {
      $query=$this->db->connect()->query("SELECT nombre FROM `medidor` WHERE id='$dni' and numero='$secuencia';");
      
      while ($row=$query->fetch()){
          $item=new BD_Usuarios();
          $item->medidor=$row['nombre'];
          $medidor=$item->medidor;
      }
        return $medidor;
      } catch (PDOException $e) {
         
      }
    }

    // public function get_tipo(){

    //   $items=[];

    //   try {
    //   $query=$this->db->connect()->query("SELECT CATERTAR,DNI FROM bd_usuario ;");
      
    //   while ($row=$query->fetch()){
    //       $item=new Usuarios();
    //       $item->medidor=$row['CATERTAR'];
    //       $item->dni=$row['DNI'];
          
    //       array_push($items,$item);
    //   }
    //     return $items;
    //   } catch (PDOException $e) {
    //     return []; 
    //   }
    // }


 }
?>