<?php

include_once "EquipoFutbol.php";
$equi= new EquipoFutbol(2,"Kim","H");

if($equi instanceof IEquipoFutbol){
    echo "Mi equipo es una instancia de la interface equipofutbol";
}
if($equi instanceof ICampeonato){
    echo "Mi equipo es una instancia de la interface campeonato";
}


?>