<?php
include_once "Persona.php";

class Trabajador extends Persona
{
    private $empresaNom;
    function __construct($nombre, $dni, $sexo, $peso, $altura, $empresaNom)
    {
        parent::__construct($nombre, $dni, $sexo, $peso, $altura);
        $this->empresaNom = $empresaNom;
    }

    public function setNombreEmpresa($empresaNom)
    {
        $this->empresaNom = $empresaNom;
    }
    public function getNombreEmpresa()
    {
        return $this->empresaNom;
    }

    public function mostrar()
    {
        parent::mostrar();
    }
    public function mostrarCompleto()
    {
        $this->mostrar();
        echo " Empresa: " . $this->empresaNom;
    }

    public function __toString()
    {
        return parent::__toString() . " Empresa: " . $this->empresaNom;
    }
}
