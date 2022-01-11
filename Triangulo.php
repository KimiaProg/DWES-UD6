<?php
include_once "FiguraGeometrica.php";
class Triangulo extends FiguraGeometrica{
    private float $base;
    private float $altura;
    public function __construct($base,$altura,$color)
    {
        $this->base=$base;
        $this->altura=$altura;
        $this->color=$color;
        $this->tipo= "triangulo";


    }

    public function dibuja(){
        echo $this->color . $this->tipo;
    }

    public function area(){
        return $this->base* $this->altura;
    }
}

?>