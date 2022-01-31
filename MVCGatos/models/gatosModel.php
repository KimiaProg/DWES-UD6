<?php

function getConnection()
{
   $user = 'root';
   $password = 'root';
   return new PDO('mysql:host=localhost;dbname=animales', $user, $password);
}

function getGatos()
{
   $con = getConnection();
   $result = $con->query('SELECT id,nombre, dni,edad,sexo,raza,fechaAlta,foto FROM gatos');
   $gatos = [];
   while ($gato = $result->fetch()) {
      $gatos[] = $gato;
   }
   $con = null;
   return $gatos;
}
function getGato($id)
{
   try {
      $a = 1;
      $conexion = getConnection();
      $sql = $conexion->prepare("SELECT id,nombre, dni,edad,sexo,raza,fechaAlta,foto FROM gatos where id= :id");
      $sql->bindParam(":id", $id);
      $sql->execute();

      $gatos = [];
      while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
         $gatos[] = $fila;
      }
   } catch (PDOException $e) {
      echo $e;
   }
   $conexion = null;
   return $gatos;
}

function getGatoNombre($nombre)
{
   try {
      $a = 1;
      $conexion = getConnection();
      $sql = $conexion->prepare("SELECT id,nombre, dni,edad,sexo,raza,fechaAlta,foto FROM gatos where nombre= :nombre");
      $sql->bindParam(":nombre", $nombre);
      $sql->execute();

      $gatos = [];
      while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
         $gatos[] = $fila;
      }
   } catch (PDOException $e) {
      echo $e;
   }
   $conexion = null;
   return $gatos;
}


function setGato($nombre, $dni,$edad,$sexo,$raza,$fechaAlta,$foto){
   try {
      $con = getConnection();
      $sql = $con->prepare("INSERT into gatos values(null,:nombre,:dni,:edad,:sexo,:raza,:fechaAlta,:foto)");
      $sql->bindParam(":nombre", $nombre);
      $sql->bindParam(":dni", $dni);
      $sql->bindParam(":edad", $edad);
      $sql->bindParam(":sexo", $sexo);
      $sql->bindParam(":raza", $raza);
      $sql->bindParam(":fechaAlta", $fechaAlta);
      $sql->bindParam(":foto", $foto);
      $sql->execute();
      $id = $con->lastInsertId();
  } catch (PDOException $e) {
      echo $e;
  }
  $con = null;
  return $id;
}

function updateGato($id, $nombre, $dni, $edad, $sexo, $raza, $fechaAlta, $foto)
{
    $retorno = false;
    try {
        $con = getConnection();
        $sql = $con->prepare("UPDATE gatos  set nombre=:nombre , dni=:dni, edad=:edad, sexo=:sexo, raza=:raza, fechaAlta=:fechaAlta, foto=:foto where id=:id;");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":dni", $dni);
        $sql->bindParam(":edad", $edad);
        $sql->bindParam(":sexo", $sexo);
        $sql->bindParam(":raza", $raza);
        $sql->bindParam(":fechaAlta", $fechaAlta);
        $sql->bindParam(":foto", $foto);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $retorno = true;
        }
    } catch (PDOException $e) {
        echo $e;
    }
    $con = null;
    return $retorno;
}


function eliminarGato($id)
{
    $retorno = false;
    try {
        $con = getConnection();
        $sql = $con->prepare("DELETE from gatos where id=:id");
        $sql->bindParam(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $retorno = true;
        }
    } catch (PDOException $e) {
        echo $e;
    }
    $con = null;
    return $retorno;
}