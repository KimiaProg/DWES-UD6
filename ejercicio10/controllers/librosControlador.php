<?php
function listar(){
    require_once './models/librosModel.php';
    $libros= getLibros();
    include_once './views/librosView.php';
}

function listarUno(){
    require_once './models/librosModel.php';
    $libros= getLibro(2);
    include_once './views/librosView.php';
}