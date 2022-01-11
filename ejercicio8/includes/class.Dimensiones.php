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
        if($value instanceof float && $value >1){
            $this->$name = $value;
        }else{
            echo "El valor tiene que ser float y mayor que 1";
        }
                
    }

    public function __toString()
    {
        return "alto=".$this->alto.",ancho=".$this->ancho.",largo=".$this->largo."";
    }

   

    

}
