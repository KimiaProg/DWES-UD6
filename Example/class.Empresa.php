<?php

class Empresa{
    private string $nif;
    private string $nombre;
    private array $clientes;
    private array $empleados;
    private Directivo $dir;

    public function __construct($nif,$nombre,$clientes,$empleados,$dir)
    {
        $this->nif=$nif;
        $this->nombre=$nombre;
        $this->clientes=$clientes;
        $this->empleados=$empleados;
        $this->dir=$dir;

    }

    public function __get($name){
            return $this->$name;
  
    }
  
    public function __set($name, $value)
    {

        if($name== "clientes" || $name== "empleados"){
            if(empty($this->$name)){
                if(is_array($value)){
                    foreach ($value as $obj ) {
                        $this->$name[]=$obj;
                    }
                }else{      
                    $this->$name[]=$value;
                }           
             }else{
                if(is_array($value)){
                    foreach ($value as $obj ) {
                        $this->$name[]=$obj;
                    }
                }else{
                    $this->$name[]=$value;
                }
            }
        }else{
            $this->$name = $value;
        }
              
    }
    public function __toString()
    {
        return 
         "Nif:" . $this->nif . " Nombre:" . $this->nombre .
         "<br>Director: ".$this->dir;
    }
}
