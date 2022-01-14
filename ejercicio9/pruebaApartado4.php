<?php

function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$miVdos= new DosRuedas("transparente",1550.,20);

$miVdos->aniadir_Persona(70);
echo $miVdos->peso;

$miVdos->color= "verde";
$miVdos->cilindrada= 1000;
Vehiculo::ver_atributos($miVdos);
echo "<br>";
$miC= new Camion("blanco",6000,5,50);
$miC->aniadir_Persona(84);
$miC->repintar("azul");
$miC->numero_puertas= 2;
Vehiculo::ver_atributos($miC);

?>