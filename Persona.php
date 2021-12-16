<?php

class Persona{

    private $nombre;
    private $dni;
    private $sexo;
    private $peso;
    private $altura;    
    function __construct($nombre, $dni, $sexo , $peso,$altura) {
        $this->nombre= $nombre;
        $this->dni= $dni;
        $this->sexo= $sexo;
        $this->peso= $peso;
        $this->altura= $altura;
    }

    public function setNombre($nombre){
        $this->nombre= $nombre;
    }
    public function setDNI($dni){
        $this->dni= $dni;
    }
    public function setSexo($sexo){
        $this->sexo= $sexo;
    }
    public function setPeso($peso){
        $this->peso= $peso;
    }
    public function setAltura($altura){
        $this->altura= $altura;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getDNI(){
        return$this->dni;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getAltura(){
        return $this->altura;
    }

    public function mostrar(){
        echo "Nombre: " . $this->nombre . " DNI: " . $this->dni . " Sexo: " . $this->sexo . " Peso: " . $this->peso . " altura: " . $this->altura;
    }

}

?>