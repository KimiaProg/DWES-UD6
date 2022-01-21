<?php
abstract class Persona implements IPersona{
    private string $nombre;
    private int $edad;

    public function mostrar(){
        echo $this->nombre;
        echo $this->edad;
    }
    public abstract function gritar();

    public function __get($name){
       
            return $this->$name;
  
    }
  
    public function __set($name, $value)
    {
            $this->$name = $value;
       
               
    }
}
