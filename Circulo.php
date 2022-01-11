<?php
include_once "FiguraGeometrica.php";
class Circulo extends FiguraGeometrica{
    private float $radio;

    public function __construct($radio,$color)
    {
        $this->radio=$radio;
        $this->color=$color;
        $this->tipo= "circulo";

    }
    public function dibuja(){
        echo $this->color . $this->tipo;
    }

    public function area(){
        return $this->radio* 3.14;
    }
}

?>