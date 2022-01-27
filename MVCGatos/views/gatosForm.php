<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css" />
     <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <title>Document</title>
</head>

<body>
    <?php
    
   
    $error= "Datos incorrectos o no se ha actualizado nada";
    ?>
    <form class="form-register w-50 mx-5" action=<?php
    if(isset($_GET["action"]) && $_GET["action"]=="create"){
        echo "/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=create";
    }else if(isset($_GET["action"]) && $_GET["action"]=="update"){
        echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=update&id='.$_GET["id"];
    }?>
     method="POST" enctype="multipart/form-data">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombre" placeholder="nombre" class="form-control mb-3" value="<?php if(isset($gatos[0]["nombre"])){
                echo $gatos[0]["nombre"]; }?>" required>
            <input type="text" name="raza" placeholder="raza" class="form-control mb-3" value="<?php if(isset($gatos[0]["raza"])){
                echo $gatos[0]["raza"]; }?>" required>
            <input type="text" name="sexo" placeholder="H/M" class="form-control mb-3" value="<?php if(isset($gatos[0]["sexo"])){
                echo $gatos[0]["sexo"]; }?>" required>
            <input type="number" name="dni" placeholder="dni" class="form-control mb-3" value="<?php if(isset($gatos[0]["dni"])){
                echo $gatos[0]["dni"]; }?>" required>
            <input type="number" name="edad" placeholder="edad" class="form-control mb-3" value="<?php if(isset($gatos[0]["edad"])){
                echo $gatos[0]["edad"]; }?>" required>
            <input type="date" name="fechaAlta" placeholder="Fecha de Alta" value="<?php if(isset($gatos[0]["fechaAlta"])){
                echo $gatos[0]["fechaAlta"]; }?>" class="form-control mb-3" required>
            <input type="file" name="avatar" accept="image/png, image/jpeg" class="form-control">
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