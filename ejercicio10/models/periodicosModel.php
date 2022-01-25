<?php

function getConnection()
{
   $user = 'root';
   $password = 'root';
   return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
}

function getPeriodicos()
{
   $con = getConnection();
   $result = $con->query('SELECT nombre, fecha FROM periodicos');
   $ps = [];
   while ($p = $result->fetch()) {
      $ps[] = $p;
   }
   $con = null;
   return $ps;
}
function getPeriodico($id)
{
   try {
      $conexion = getConnection();
      $sql = $conexion->prepare("SELECT nombre, fecha FROM periodicos where id=:id");
      $sql->bindParam(":id", $id);
      $sql->execute();

      $ps = [];
      while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
         $ps[] = $fila;
      }
   } catch (PDOException $e) {
      echo $e;
   }
   $conexion = null;
   return $ps;
}
