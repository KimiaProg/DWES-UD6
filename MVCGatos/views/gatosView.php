<html>

<head>
    <title>Catálogo libros</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css" />

</head>

<body>
    <div>
        <h1>Gatos:</h1>
        <?php if (!isset($_GET["action"]) || $_GET["action"] == "listar") {
        ?>
            <a href="/DWS/DWES-UD6/MVCGatos/index.php?action=create">Crear Gato</a>
    </div>

<?php } ?>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Raza</th>
        <th>FechaAlta</th>
        <th>Foto</th>
        <th>Detalle</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>

    <?php
    foreach ($gatos as $gato) {
    ?>
        <tr>
            <td><?php echo $gato['nombre'] ?></td>
            <td><?php echo $gato['dni'] ?></td>
            <td><?php echo $gato['edad'] ?></td>
            <td><?php echo $gato['sexo'] ?></td>
            <td><?php echo $gato['raza'] ?></td>
            <td><?php echo $gato['fechaAlta'] ?></td>
            <td><?php echo $gato['foto'] ?></td>
            <td><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?action=listarUno&id=' . $gato["id"]; ?>>Details</a></td>
            <td><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?action=update&id=' . $gato["id"]; ?>>Edit</td>
            <td><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?action=delete&id=' . $gato["id"]; ?>>Borrar</a></td>
        </tr>

    <?php
    }
    ?>

</table>
</body>

</html>