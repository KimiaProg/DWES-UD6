<?php
function __autoload($name)
{
   include_once './class.' . $name . '.php';
}
$Hola = new Empresa("e","Hola",[],[],new Directivo("dir1","Jose",24));

$clientes= [
    new Cliente("pepe5","Salmon",50),
    new Cliente("Lale85","Chaga",34),
    new Cliente("mercedes","JoseJoa",50)
];


$empleados= [
    new Empleado("33","3000","Kimia",24),
    new Empleado("33","3000","Alvaro",25),
];
$Hola->clientes=$clientes;
$Hola->empleados=$empleados;

echo $Hola;
print_r($Hola->clientes);
print_r($Hola->empleados);
$Hola->clientes= new Cliente("LELE","Salmoniiiiiiiii",50);
echo "<br>";
print_r( $Hola->clientes);

$Hola->clientes= $clientes;
echo "<br>";

print_r( $Hola->clientes);
echo $Hola->clientes[0]->nombre;

$eje = new Eje("33","3000","Kimia",24,"R");
echo $eje->nombre;





?>