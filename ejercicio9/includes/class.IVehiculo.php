<?php

interface IVehiculo{

    public function circula();

    public function __get($name);

    public function __set($name, $value);
    public static function ver_atributos($obj);
}
?>