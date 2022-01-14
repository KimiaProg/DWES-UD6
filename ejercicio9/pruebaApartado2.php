<?php

function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}
//No funciona ya que hemos cambiado la clase de vehiculo a una clase abstracta
$miV= new Vehiculo("rojo",450);
$miV->circula();

$miV->aniadir_Persona(50);
$miV->aniadir_Persona(60);
echo $miV->peso;


?>