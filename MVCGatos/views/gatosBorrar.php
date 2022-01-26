<html>

<head>
    <title>Catálogo libros</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css" />

</head>

<body>
    <?php

    if ($_GET["error"] == "si") {
    ?>
        <h1>El gato no se ha podido borrar </h1>
    <?php
    } else {
    ?>
        <h1>El gato borrado id: <?php echo $_GET["id"]; ?> </h1>

    <?php
    }
    ?>

</body>

</html>