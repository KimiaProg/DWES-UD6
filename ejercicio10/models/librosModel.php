<?php

function getConnection(){
   $user = 'developer';
   $password = 'developer';
    return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
}

function getLibros(){
   $con= getConnection();
   $result = $con->query('SELECT titulo, precio FROM libros');
   $libros= [];
   while ($libro = $result->fetch()) {
    $libros[]= $libro;
 }
 return $libros;
}
function getLibro($id){
   try {
      $conexion = getConnection();
      $sql = $conexion->query("SELECT titulo, precio FROM libros where id= :id");
      $sql->bindParam(":id", $id);
      $sql->execute();
      $fila = $sql->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      echo $e;
  }
  $conexion = null;
  return $fila;
}