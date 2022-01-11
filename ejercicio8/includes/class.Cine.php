<?php
class Cine extends LocalComercial{
    private int $aforoSala;

    public function __construct($aforoSala ,$razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area)
    {
        $this->aforoSala=$aforoSala;
        parent::__construct($razonSocial,$numLicencia,$ciudad,$calle,$numPlatantas,$dimensiones,$area);
    }
   

    public function __set($name,$value){
        parent::__set($name,$value);
       if($name=="aforoSala"){
            if($value>0 && is_int($value)){
                $this->$name = $value;
            }else{
                echo "Error";
            }
        }
    }
    public function __toString()
    {
        return "<p>".parent::__toString()."</p><p>Aforo: ".$this->aforoSala."<br></p>";
    }
}
