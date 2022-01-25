<?php

class LocalComercial extends Local{

    private string $razonSocial;
    private string $numLicencia;
    
    public function __construct($razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area)
    {
        if(is_string($razonSocial)&& is_string($numLicencia)){
            $this->razonSocial=$razonSocial;
            $this->numLicencia=$numLicencia;
            parent::__construct($ciudad,$calle,$numPlatantas,$dimensiones,$area);
        }else{
            echo "ErrorLocalComercial";
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
        return "<p>".parent::__toString()."</p><p>Razón Social: ".$this->razonSocial."<br></p><p>Número de Licencia: ".$this->numLicencia."<br></p>";
    }

}


?>