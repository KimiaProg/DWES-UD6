<?php

class Directivo extends Persona{
    private string $idDir;
    public function gritar(){
        echo $this->idDir;
    }

    public function __construct($idDir,$nombre,$edad)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->idDir=$idDir;

    }

    public function __get($name){
        return $this->$name;

}

public function __set($name, $value)
{
        $this->$name = $value;      
}
    public function __toString()
    {
        return "<br>idDir: ". $this->idDir;
    }
}


?>