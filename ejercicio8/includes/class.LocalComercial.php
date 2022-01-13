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
 
    public function __toString()
    {
        return "<p>".parent::__toString()."</p><p>Razón Social: ".$this->razonSocial."<br></p><p>Número de Licencia: ".$this->numLicencia."<br></p>";
    }

}



?>