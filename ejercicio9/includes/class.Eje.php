<?php


class Eje extends Coche{
    private int $p;

    public function __construct($color,$peso,$numero_puertas,$numero_cadenas_nieve,$p)
    {
        parent::__construct($color,$peso,$numero_puertas,$numero_cadenas_nieve);
        $this->p=$p;
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

    
}
