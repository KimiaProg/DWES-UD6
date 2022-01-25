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
    include "../models/gatosModel.php";

    $gatos= getGato($_GET["id"]);
    $error= "Datos incorrectos o no se ha actualizado nada";
    ?>
    <form class="form-register" action=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?action=update&id='.$_GET["id"];?> method="POST" enctype="multipart/form-data">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombre" placeholder="nombre" class="input-100" value="<?php echo $gatos["nombre"] ?>" required>
            <input type="text" name="raza" placeholder="raza" class="input-100" value="<?php echo $gatos["raza"] ?>" required>
            <input type="text" name="sexo" placeholder="H/M" class="input-100" value="<?php echo $gatos["sexo"] ?>" required>
            <input type="number" name="dni" placeholder="dni" class="input-48" value="<?php echo $gatos["dni"] ?>" required>
            <input type="number" name="edad" placeholder="edad" class="input-48" value="<?php echo $gatos["edad"] ?>" required>
            <input type="date" name="fechaAlta" placeholder="Fecha de Alta" value="<?php echo $gatos["fechaAlta"] ?>" class="input-100" required>
            <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100">
            <input type="submit" value="Registrar" class="btn-enviar">
            <?php
            if(isset($_GET["error"])){
                echo "<div>".$error."</div>";
            }
            ?>
        </div>
    </form>
</body>

</html>