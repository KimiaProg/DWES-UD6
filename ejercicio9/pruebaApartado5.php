<?php

function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$miV= new Coche("azul",2100.,4,2);

$miV->aniadir_Persona(80);
$miV->color="azul";
$miV->quitar_cadenas_nieve(4);
$miV->repintar("negro");
Vehiculo::ver_atributos($miV);
$p = new Eje("azul",2100.,4,2,"f");

Vehiculo::ver_atributos($p);


?>