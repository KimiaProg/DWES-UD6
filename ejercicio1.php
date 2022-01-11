<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "Persona.php";

    $Yo= new Persona("Kimia","y6470826c","M",52,160);
    echo $Yo->getNombre();
    echo $Yo->mostrar();
    echo "<br>";
    $Yo->setPeso(80);
    $Yo->setNombre("Maria");
    $Yo->setAltura(200);
    echo $Yo->mostrar();

    ?>
</body>
</html>