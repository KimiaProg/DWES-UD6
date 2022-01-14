<?php

function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$miV= new Coche("azul",650.,4,2);

$miV->aniadir_Persona(700);
echo $miV->peso;
echo $miV->color;
echo $miV->numero_cadenas_nieve;

$miV->repintar("amarillo");
$miV->aniadir_cadenas_nieve(3);
echo $miV->color;
echo $miV->numero_cadenas_nieve;


$dosRuedas= new DosRuedas("marron",30,40);
$dosRuedas->aniadir_Persona(2);
$dosRuedas->poner_gasolina(2000);
$dosRuedas->color="amarillo";
$dosRuedas->color= "d";
Vehiculo::ver_atributos($dosRuedas);
echo $dosRuedas->color;
echo $dosRuedas->peso;


?>