<?php

class Dimensiones{
    private float $largo;
    private float $alto;
    private float $ancho;

    public function __construct($largo,$ancho,$alto)
    {
        $this->largo = $largo;
        $this->alto= $alto;
        $this->ancho= $ancho;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        if(is_float($value) && $value >1){
            $this->$name = $value;
        }else{
            echo "El valor tiene que ser float y mayor que 1";
            die();
        }        
    }

    public function __toString()
    {
        return "alto=".$this->alto.",ancho=".$this->ancho.",largo=".$this->largo."";
    }

   

}
