<?php
include_once "ICampeonato.php";
include_once "IEquipoFutbol.php";

class EquipoFutbol implements IEquipoFutbol , ICampeonato
{
    private int $numeroJugadores;
    private string $nombre;
    private string $campeonato;
    function __construct($numeroJugadores, $nombre,$campeonato)
    {
        $this->numeroJugadores = $numeroJugadores;
        $this->nombre = $nombre;
        $this->campeonato = $campeonato;

    }

    public function getNumeroJugadores(){
        return $this->numeroJugadores;

    }
    public function juegaPartido(){
        return $this->nombre . "  VICTORIA";

    }

    public function getNombreCampeonato()
    {
        return $this->campeonato;
    }
}
