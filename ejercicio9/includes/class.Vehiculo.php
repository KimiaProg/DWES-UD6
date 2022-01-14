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
            }
        }else{
            $this->$name = $value;
        }
          
    }

    public static function ver_atributos($obj){
        echo "<br>"." Numero de cambio de color:".self::$numero_cambio_color ."<br>";
         if(isset($obj->color)){
             echo $obj->color . " ";
         };
         if(isset($obj->peso)){
            echo $obj->peso . " ";
        };
        if(property_exists(get_class($obj), "numero_puertas")|| property_exists(get_parent_class($obj), "numero_puertas")){
            echo $obj->numero_puertas . " ";
        };
        if(property_exists(get_class($obj) , "cilindrada") || property_exists(get_parent_class($obj), "cilindrada")){
            echo $obj->cilindrada . " ";
        };
        if(property_exists(get_class($obj), "longitud") ||property_exists(get_parent_class($obj), "longitud") ){
            echo $obj->longitud . " ";
        };
        if(property_exists(get_class($obj), "numero_cadenas_nieve") || property_exists(get_parent_class($obj), "numero_cadenas_nieve")){
            echo $obj->numero_cadenas_nieve . " ";
        };

    }
}
