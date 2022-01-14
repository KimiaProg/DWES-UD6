<?php

abstract class Vehiculo implements IVehiculo{

    private string $color;
    private float $peso;
    protected static $numero_cambio_color=0;


    public function circula(){
        echo "El vehiculo está circulando";
    }

    public abstract function aniadir_Persona($peso_persona);

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        if($name=="color"){
            self::$numero_cambio_color++;
            $this->$name = $value;
        }elseif($name=="peso"){
            if($value<=2100){
                $this->$name = $value;
            }else{
                echo "<br>El vehículo tiene más de 2100 kg, así que se le asigna 2100 kg <br>";
                $this->$name = 2100;
            }
        }else{
            $this->$name = $value;
        }
          
    }

    public static function ver_atributos($obj){
        echo "<br>"." Numero de cambio de color:".self::$numero_cambio_color ."<br>";
        echo "Atributos:<br>";
         if(isset($obj->color)){
             echo "Color: ". $obj->color . " ";
         };
         if(isset($obj->peso)){
            echo "Peso: ". $obj->peso . " ";
        };
        if(property_exists(get_class($obj), "numero_puertas")|| property_exists(get_parent_class($obj), "numero_puertas")){
            echo "numero_puertas: ".  $obj->numero_puertas . " ";
        };
        if(property_exists(get_class($obj) , "cilindrada") || property_exists(get_parent_class($obj), "cilindrada")){
            echo "cilindrada: ". $obj->cilindrada . " ";
        };
        if(property_exists(get_class($obj), "longitud") ||property_exists(get_parent_class($obj), "longitud") ){
            echo "longitud: ". $obj->longitud . " ";
        };
        if(property_exists(get_class($obj), "numero_cadenas_nieve") || property_exists(get_parent_class($obj), "numero_cadenas_nieve")){
            echo "numero_cadenas_nieve: ".  $obj->numero_cadenas_nieve . " ";
        };

    }
}
