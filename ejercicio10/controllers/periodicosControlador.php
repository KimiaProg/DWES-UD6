<?php


function listar(){
    require_once './models/periodicosModel.php';
    $periodicos= getPeriodicos();
    include_once './views/periodicosView.php';
}

function listarUno(){
    require_once './models/periodicosModel.php';
    $periodicos= getPeriodico($_GET['id']);
    include_once './views/periodicosView.php';
}

?>