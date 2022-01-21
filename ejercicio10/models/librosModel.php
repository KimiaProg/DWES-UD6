<?php

function getConnection()
{
   $user = 'root';
   $password = 'root';
   return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
}

function getLibros()
{
   $con = getConnection();
   $result = $con->query('SELECT titulo, precio FROM libros');
   $libros = [];
   while ($libro = $result->fetch()) {
      $libros[] = $libro;
   }
   $con = null;
   return $libros;
}
function getLibro($id)
{
   try {
      $a = 1;
      $conexion = getConnection();
      $sql = $conexion->prepare("SELECT titulo, precio FROM libros where id= :id");
      $sql->bindParam(":id", $id);
      $sql->execute();

      $libros = [];
      while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
         $libros[] = $fila;
      }
   } catch (PDOException $e) {
      echo $e;
   }
   $conexion = null;
   return $libros;
}
