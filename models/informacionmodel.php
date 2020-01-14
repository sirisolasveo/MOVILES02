<?php 
 include_once 'models/usuarios.php';

 class InformacionModel extends Model{
 	
 	public function __construct(){
 		parent::__construct();
 	}
    
  public function get(){

      $items=[];

      try {
      $query=$this->db->connect()->query("SELECT `COD_USUARIO`,`PROPIETARIO`,`DNI`,catertar,nombre FROM data,medidor WHERE data.DNI=medidor.id;");
      
      while ($row=$query->fetch()){
          $item=new Usuarios();
          $item->codigo=$row['COD_USUARIO'];
          $item->propietario=$row['PROPIETARIO'];
          $item->dni=$row['DNI'];
          $item->catetar=$row['catertar'];
          $item->medidor=$row['nombre'];
          
          array_push($items,$item);
      }
        return $items;
      } catch (PDOException $e) {
        return []; 
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