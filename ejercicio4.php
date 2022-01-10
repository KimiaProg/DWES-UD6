<?php

include_once "Vivienda.php";

$miViv= new Vivienda("Hola",12.2);
echo $miViv->valorMercado;
echo "<br>";
echo $miViv->tipoVivienda;
echo "<br>";

$miViv->tipoVivienda="Pepe";
echo $miViv->tipoVivienda;
echo "<br>";

$miViv->valorMercado=12;
echo $miViv->valorMercado;
echo "<br>";

$miViv->valorMercado=-5;
echo $miViv->valorMercado;
echo "<br>";




?>