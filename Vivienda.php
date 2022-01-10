<?php
class Vivienda
{
    private string $tipoVivienda;
    private float $valorMercado;

    function __construct($tipoVivienda, $valorMercado)
    {
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        switch ($name) {
            case 'tipoVivienda':
                $this->$name = $value;
                break;
            case 'valorMercado':
                if ($value >= 0) {
                    $this->$name = $value;
                }else{
                    echo "El valor no se puede ser menor que cero";
                }
                break;
        }
    }
}
