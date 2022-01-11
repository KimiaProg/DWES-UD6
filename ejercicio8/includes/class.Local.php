<?php
class Local{
    private string $ciudad;
    private string $calle;
    private int $numPlatantas;
    private Dimensiones $dimensiones;
    private float $area;

    public function __construct($ciudad,$calle,$numPlatantas,$dimensiones,$area)
    {
        $this->ciudad=$ciudad;
        $this->calle=$calle;
        $this->numPlatantas= $numPlatantas;
        $this->dimensiones=$dimensiones;
        $this->area=$area;
    }


    public function __get($name)
    {
        if($name== "area"){
            return $this->name->ancho * $this->name->largo; 
        }else{
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        if($name=="dimensiones" || $name== "area"){
            if ($value instanceof Dimensiones){
                $this->$name = $value;
            }else{
                echo "Error";
            }
        }else{
            if($name=="ciudad" || $name="calle" ||$name=="razonSocial" || $name=="numLicencia"){
                if ($value instanceof string){
                    $this->$name = $value;
                }else{
                    echo "Error";
                }
            }else if($name=="numPlatantas" ){
                if ($value instanceof int && $value >1 && $value<10){
                    $this->$name = $value;
                }else{
                    echo "Error";
                }
            }else if($name=="area"){
                if ($value instanceof float){
                    $this->$name = $value;
                }else{
                    echo "Error";
                }
            }
        }
         
    }     

    public function __toString()
    {
        return "<p>Ciudad: ".$this->ciudad."<br></p><p>Calle: ".$this->calle."<br></p><p>Plantas: ".$this->numPlatantas."<br></p><p>Dimensiones: (".$this->dimensiones.")<br></p>";
    }
    

    public function __clone(){
        return clone $this->dimensiones;
    }

}
