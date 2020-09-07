<?php
class tabla {
    public $open;
 

    public function __construct(){
      $this->open = fopen("../Problema1.csv", "r");
if($this->open !== NULL){

  while (($datos = fgetcsv($this->open , ",")) !== FALSE) {
    $count = count($datos);
    
    for($item = 0; $item <= $count; $item++){
      echo $datos["$item"].'</br>';

    }
   
  }
}else{
  echo "ha ocurrido un error";
}
 
    }
    public function leer(){
        return $this->lectura;
    }
}
$fichero = new tabla();
echo $fichero;

?>

