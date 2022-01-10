<?php
include_once "FiguraGeometrica.php";
class Cuadrado extends FiguraGeometrica{
    private float $lado;
    public function __construct($lado,$color)
    {
        $this->lado=$lado;
        $this->color=$color;

    }
    public function dibuja(){
        echo $this->color . " cuadrado";
    }

    public function area(){
        return $this->lado*4;
    }
}

?>