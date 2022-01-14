<?php

class CuatroRuedas extends Vehiculo{
    private int $numero_puertas;

    public function __construct($color,$peso,$numero_puertas)
    {
        $this->color=$color;
        $this->peso=$peso;
        $this->numero_puertas=$numero_puertas;
    }
    public function repintar($color){
        $this->color=$color;
    }

    public function __get($name){
        if(property_exists(get_class(),$name)){
            return $this->$name;
        }else{
            return parent::__get($name);
        }
       
  
    }
  
    public function __set($name, $value)
    {
        if(property_exists(get_class(),$name)){
            $this->$name = $value;
        }else{
            parent::__set($name,$value);
        }       
    }
 
    public function aniadir_Persona($peso_persona){
        $this->peso = $this->peso + $peso_persona;
    }

 
}


?>