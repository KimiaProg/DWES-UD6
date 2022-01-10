<?php
include_once "EquipoFutbol.php";
$equi= new EquipoFutbol(2,"Kim","H");
echo $equi->getNombreCampeonato();
echo $equi->juegaPartido();
echo $equi->getNumeroJugadores();


?>