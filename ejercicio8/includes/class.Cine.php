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
   
    public function __toString()
    {
        return "<p>".parent::__toString()."</p><p>Aforo: ".$this->aforoSala."<br></p>";
    }
}
