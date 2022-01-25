<?php

class Eje extends Empleado{
    private string $id;

    public function __construct($idEmple,$sueldoBruto,$nombre,$edad,$id)
    {
        parent::__construct($idEmple,$sueldoBruto,$nombre,$edad);
        $this->id=$id;
        echo $this->nombre;
    }


    public function __get($name){
        return $this->$name;

    }

public function __set($name, $value)
{
        $this->$name = $value;      
}


}


?>