<?php

class LocalComercial extends Local{

    private string $razonSocial;
    private string $numLicencia;
    
    public function __construct($razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area)
    {
        $this->razonSocial=$razonSocial;
        $this->numLicencia=$numLicencia;
        parent::__construct($ciudad,$calle,$numPlatantas,$dimensiones,$area);

    }
    public function __set($name,$value){
        parent::__set($name,$value);
        if($name=="razonSocial" || $name=="numLicencia"){
            if (is_string($value)){
                $this->$name = $value;
            }else{
                echo "Error";
            }
        }
    }
    public function __toString()
    {
        return "<p>".parent::__toString()."</p><p>Razón Social: ".$this->razonSocial."<br></p><p>Número de Licencia: ".$this->numLicencia."<br></p>";
    }



}






?>