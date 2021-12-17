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
    include_once "Trabajador.php";
    $YoTrabajador = new Trabajador("Kimia", "33", "M", "50", "160", "Deloitte.");
    echo $YoTrabajador->getNombreEmpresa();
    $YoTrabajador->mostrarCompleto();
    $YoTrabajador->setNombreEmpresa("Everis");
    $YoTrabajador->setAltura(500);
    echo "<br>";
    $YoTrabajador->mostrarCompleto();
    ?>
</body>

</html>