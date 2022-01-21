<?php

class Cliente extends Persona{
    private string $dirCliente;

    public function __construct($dirCliente,$nombre,$edad)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->dirCliente=$dirCliente;
    }
    public function gritar(){
        echo $this->dirCliente;
    }

    public function mostrar(){
        parent::mostrar();
        echo $this->diCliente;
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
        return "<br>dirCliente: ". $this->dirCliente;
    }
}


?>