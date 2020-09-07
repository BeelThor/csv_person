<?php
require_once ('personas.php');
class empleado extends persona{
    private $salario;

    public function __construct($nombre,$fecha,$empleado,$salario){
        parent::__construct($nombre,$fecha,$empleado);
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }
}

$empleado = new empleado("Pablo Ramirez ", "07/10/1999", true , 23400000);
echo $empleado->getNombre() . $empleado->getFecha() .$empleado->getSalario(). 
$empleado->getEmpleado();
?>