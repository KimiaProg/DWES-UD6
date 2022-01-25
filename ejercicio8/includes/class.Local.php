<?php
class Local
{
    private string $ciudad;
    private string $calle;
    private int $numPlatantas;
    private Dimensiones $dimensiones;
    private float $area;

    public function __construct($ciudad, $calle, $numPlatantas, $dimensiones, $area)
    {
        if ($dimensiones instanceof Dimensiones && is_string($calle) && is_string($ciudad) && is_int($numPlatantas) && $numPlatantas >= 1 && $numPlatantas <= 10 && is_numeric($area) ) {
            $this->dimensiones = $dimensiones;
            $this->calle = $calle;
            $this->ciudad = $ciudad;     
            $this->numPlatantas = $numPlatantas;
            $this->area = $area;
        } else {
            echo "ErrorLocal";
            die();
        }
    }


    public function __get($name)
    {
        if ($name == "area") {
            return $this->dimensiones->ancho * $this->dimensiones->largo;
        }else{
            return $this->$name;
        }
        // elseif ($name == "dimensiones") {
    }

    public static function ver($obj){
        echo "<br>";
        echo $obj->aforoSala;
       
        
            
        
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
           
    }

    public function __toString()
    {
        return "<p>Ciudad: " . $this->ciudad . "<br></p><p>Calle: " . $this->calle . "<br></p><p>Plantas: " . $this->numPlatantas . "<br></p><p>Dimensiones: (" . $this->dimensiones . ")<br></p>";
    }


    public function __clone()
    {
        $this->dimensiones = clone $this->dimensiones;
    }
}
