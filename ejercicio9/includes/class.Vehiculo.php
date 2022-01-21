<?php

abstract class Vehiculo implements IVehiculo
{

    private string $color;
    private float $peso;
    protected static $numero_cambio_color = 0;


    public function circula()
    {
        echo "El vehiculo está circulando";
    }

    public abstract function aniadir_Persona($peso_persona);

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        if ($name == "color") {
            self::$numero_cambio_color++;
            $this->$name = $value;
        } elseif ($name == "peso") {
            if ($value <= 2100) {
                $this->$name = $value;
            } else {
                echo "<br>El vehículo tiene más de 2100 kg, así que se le asigna 2100 kg <br>";
                $this->$name = 2100;
            }
        } else {
            $this->$name = $value;
        }
    }

   

    public static function ver_atributos($obj)
    {
        echo "<br>" . " Numero de cambio de color:" . self::$numero_cambio_color . "<br>";
        echo "Atributos:<br>";

        if (isset($obj->color)) {
            echo "Color: " . $obj->color . " ";
        };
        if (isset($obj->peso)) {
            echo "Peso: " . $obj->peso . " ";
        };

       self::property_exists_obj("numero_puertas",$obj);
       
       self::property_exists_obj("cilindrada",$obj);

       self::property_exists_obj("longitud",$obj);

       self::property_exists_obj("numero_cadenas_nieve",$obj);

        
    }

    public static function property_exists_obj($atributo , $obj){
        if (property_exists(get_class($obj), $atributo)) {
            echo $atributo.": " .  $obj->$atributo . " ";
        } else {
            $objCur= $obj;
            while ($padre = get_parent_class($objCur)) {
                if (property_exists($padre, $atributo)) {
                    echo $atributo.": " .  $obj->$atributo . " ";
                    break;
                };
                $objCur = $padre;
            }
        }

    }

    

    
}
