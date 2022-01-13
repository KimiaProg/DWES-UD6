<?php
function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$cines[0] = new Cine(2, 'Razon 1', 'C0001A', 'Alicante', 'Calle 1', 1, new Dimensiones(10., 10., 10.), 10);
$cines[1] = new Cine(4, 'Razon 2', 'C0002B', 'Alicante', 'Calle 2', 2, new Dimensiones(20., 20., 20.), 20);
$cines[2] = new Cine(5, 'Razon 3', 'C0001C', 'Alicante', 'Calle 3', 3, new Dimensiones(30., 30., 30.), 30);
$copia = clone $cines[1];
$copia->dimensiones->alto = 40.;
$copia->dimensiones->ancho = 50.;
$copia->dimensiones->largo = 60.;
foreach ($cines as $cine)
   echo $cine . '<br>';
echo $copia;
echo $cines[1];
echo 'Área: ' . $copia->area . ' m2';
