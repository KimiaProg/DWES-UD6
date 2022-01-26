<?php

function getConnection()
{
   $user = 'root';
   $password = 'root';
   return new PDO('mysql:host=localhost;dbname=animales', $user, $password);
}


function getUser($usu)
{
   try {
      $a = 1;
      $conexion = getConnection();
      $sql = $conexion->prepare("SELECT * FROM usuarios where usuario= :u");
      $sql->bindParam(":u", $usu);
      $sql->execute();

      $users = [];
      while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
         $users[] = $fila;
      }
   } catch (PDOException $e) {
      echo $e;
   }
   $conexion = null;
   return $users;
}


