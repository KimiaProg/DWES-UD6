<?php
include_once "FiguraGeometrica.php";
class Circulo extends FiguraGeometrica{
    private float $radio;

    public function __construct($radio,$color)
    {
        $this->radio=$radio;
        $this->color=$color;

    }
    public function dibuja(){
        echo $this->color . " circulo";
    }

    public function area(){
        return $this->radio* 3.14;
    }
}

?>