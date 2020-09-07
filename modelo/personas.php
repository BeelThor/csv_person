<?php
class persona{
    protected $nombre;
    protected $fechaNacimiento;
    protected $empleado = false;

    public function __construct($nombre, $fecha,$empleado){
        $this->nombre = $nombre;
        $this->empleado = $empleado;
        $this->fechaNacimiento = $fecha;
    }
    public function getNombre(){
        return $this->nombre; 
    }
    public function getFecha(){
        return $this->fechaNacimiento;
    }
    public function getEmpleado(){
        return $this->empleado;
    }
}
?>