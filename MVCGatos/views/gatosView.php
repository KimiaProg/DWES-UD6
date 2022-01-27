<html>

<head>
    <title>Catálogo libros</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css" />
     <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="./css/main.css" />


</head>

<body>
    <div>
        <h1>Gatos:</h1>
        <?php if (!isset($_GET["action"]) || $_GET["action"] == "listar") {
        ?>
            <a href="/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=create">Crear Gato</a>
    </div>

<?php } ?>
<table class="table mx-5 w-50 mt-3">
    <thead class="table-dark ">
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
    </thead>

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
            <td><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=listarUno&id=' . $gato["id"]; ?>>Details</a></td>
            <td><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=update&id=' . $gato["id"]; ?>>Edit</td>
            <td><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=delete&id=' . $gato["id"]; ?>>Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>
</body>

</html>