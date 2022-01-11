<?php
include_once "FiguraGeometrica.php";
class Cuadrado extends FiguraGeometrica{
    private float $lado;
    public function __construct($lado,$color)
    {
        $this->lado=$lado;
        $this->color=$color;
        $this->tipo= "cuadrado";


    }
    public function dibuja(){
        echo $this->color . $this->tipo;
    }

    public function area(){
        return $this->lado* $this->lado;
    }
}

?>