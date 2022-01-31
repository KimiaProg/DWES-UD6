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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php?controller=gatos&action=listar">Gatos S.L.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.html">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Gatos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">About Gatos </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="contactar.html">Contact us</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    ?>
    <div class="container">
        <form class="form-register w-50 mx-5" action=<?php
                                                        if (isset($_GET["action"]) && $_GET["action"] == "create") {
                                                            echo "./index.php?controller=gatos&action=create";
                                                        } else if (isset($_GET["action"]) && $_GET["action"] == "update") {
                                                            echo './index.php?controller=gatos&action=update&id=' . $_GET["id"];
                                                        } ?> method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo mt-5">Características:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombre" placeholder="nombre" class="form-control mb-3" value="<?php if (isset($gatos[0]["nombre"])) {
                                                                                                            echo $gatos[0]["nombre"];
                                                                                                        } ?>" required>
                <input type="text" name="raza" placeholder="raza" class="form-control mb-3" value="<?php if (isset($gatos[0]["raza"])) {
                                                                                                        echo $gatos[0]["raza"];
                                                                                                    } ?>" required>
                <input type="text" name="sexo" placeholder="H/M" class="form-control mb-3" value="<?php if (isset($gatos[0]["sexo"])) {
                                                                                                        echo $gatos[0]["sexo"];
                                                                                                    } ?>" required>
                <input type="number" name="dni" placeholder="dni" class="form-control mb-3" value="<?php if (isset($gatos[0]["dni"])) {
                                                                                                        echo $gatos[0]["dni"];
                                                                                                    } ?>" required>
                <input type="number" name="edad" placeholder="edad" class="form-control mb-3" value="<?php if (isset($gatos[0]["edad"])) {
                                                                                                            echo $gatos[0]["edad"];
                                                                                                        } ?>" required>
                <input type="date" name="fechaAlta" placeholder="Fecha de Alta" value="<?php if (isset($gatos[0]["fechaAlta"])) {
                                                                                            echo $gatos[0]["fechaAlta"];
                                                                                        } ?>" class="form-control mb-3" required>
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="form-control">
                <input type="submit" class="mt-2" value="Registrar" class="btn-enviar">
                <?php
                if (isset($_GET["error"])) {
                    $error = "Datos incorrectos o no se ha actualizado nada";
                    echo "<div class='text-danger'>" . $error . "</div>";
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>