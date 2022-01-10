<?php

include_once "Cuadrado.php";
include_once "Triangulo.php";
include_once "Circulo.php";

$cir= new Circulo(2.12,"red");
$tir= new Triangulo(2,5,"yellow");
$cuad= new Cuadrado(6,"red");

$cir->dibuja();
echo $cir->area();
echo "<br>";
$tir->dibuja();
echo $tir->area();
echo "<br>";
$cuad->dibuja();
echo $cuad->area();
echo "<br>";

echo "Circulo está bien?";
var_dump($cir instanceof Circulo);


echo "Triangulo está bien?";
var_dump($tir instanceof Triangulo);


echo "Cuadrado está bien?";
var_dump($cuad instanceof Cuadrado);
