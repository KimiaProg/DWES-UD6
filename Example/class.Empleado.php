<?php

class Empleado extends Persona{
    private string $idEmple;
    private float $sueldoBruto;
    private Empresa $empresa;

    public function __construct($idEmple,$sueldoBruto,$nombre,$edad)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->idEmple=$idEmple;
        $this->sueldoBruto=$sueldoBruto;
    }

    public function gritar(){
        echo $this->idEmple;
    }

    public function mostrar(){
        parent::mostrar();
        echo $this->sueldoBruto;
        echo $this->empresa;

    }

    public function calularSalarioNeto(){

    }

    public function __get($name){
        return $this->$name;

}

public function __set($name, $value)
{
        $this->$name = $value;      
}

    public function __toString()
    {
        return "<br>idEmple: ". $this->idEmple . "sueldo " .$this->sueldoBruto;
    }

}


?>