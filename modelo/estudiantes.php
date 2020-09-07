<?php
require_once ('personas.php');
class estudiante extends persona{
    private $calificacion;

    public function __construct($nombre,$fecha,$empleado,$calificadion){
        
        parent:: __construct($nombre,$fecha,$empleado);
        $this->calificacion = $calificacion;

    }
    public function getCalificacion(){
        return $this->calificacion;
    }
   

    
}
$estudiante = new estudiante("Juan pablo Cardenas ","09/04/2000 ", true,4);
echo $estudiante->getNombre() . $estudiante->getFecha() .$estudiante->getCalificacion(). 
$estudiante->getEmpleado();

?>