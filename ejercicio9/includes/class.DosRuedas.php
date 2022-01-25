<?php

class DosRuedas extends Vehiculo{
    private int $cilindrada;

    public function __construct($color,$peso,$cilindrada)
    {
        $this->color=$color;
        $this->peso=$peso;
        $this->cilindrada=$cilindrada;
    }

    public function poner_gasolina($litros){
        $this->peso= $this->peso +($litros *1.5);
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
        $this->peso = $this->peso + $peso_persona + 1.5;
    }
 
 
  
}


?>