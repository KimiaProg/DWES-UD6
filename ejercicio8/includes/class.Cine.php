<?php
class Cine extends LocalComercial{
    private int $aforoSala;

    public function __construct($aforoSala ,$razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area)
    {
        if(is_int($aforoSala) && $aforoSala>0){
            $this->aforoSala=$aforoSala;
            parent::__construct($razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area);
        }else{
            echo "ErrorCine";
            die();
        }
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

    public function __toString()
    {
        return "<p>".parent::__toString()."</p><p>Aforo: ".$this->aforoSala."<br></p>";
    }
}
