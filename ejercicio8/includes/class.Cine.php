<?php
class Cine extends LocalComercial{
    private int $aforoSala;

    public function __construct($aforoSala ,$razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area)
    {
        $this->aforoSala=$aforoSala;
        parent::__construct($razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area);
    }

    public function __set($name, $value)
    {
        if($value>0 && $value instanceof int){
            $this->$name = $value;
        }else{
            echo "Error";
        }
         
    }     

    public function __toString()
    {
        return "<p><datos del local comercial></p><p>Aforo: ".$this->aforoSala."<br></p>";
    }
}
