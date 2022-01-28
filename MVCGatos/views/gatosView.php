<html>

<head>
    <title>Catálogo libros</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css" />
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css" />
    <script src="delete.js"></script>
    <link rel="stylesheet" href="./css/main.css" />


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

    <div class="container mt-5 ">
        <div class="row d-flex align-items-center" style="width: 800px;">
            <div class="col-10">
                <h1>Gatos:</h1>
            </div>

            <?php if (!isset($_GET["action"]) || $_GET["action"] == "listar") {
            ?>
                <div class="col-2 bg-success d-flex align-items-center" style="border-radius: 10px;height:35px; width: 111px">
                    <a class="text-light text-decoration-none" href="/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=create">Crear Gato</a>
                </div>

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
                <td class="item"><?php echo $gato['nombre'] ?></td>
                <td class="item"><?php echo $gato['dni'] ?></td>
                <td class="item"><?php echo $gato['edad'] ?></td>
                <td class="item"><?php echo $gato['sexo'] ?></td>
                <td class="item"><?php echo $gato['raza'] ?></td>
                <td class="item"><?php echo $gato['fechaAlta'] ?></td>
                <td class="item"><?php echo $gato['foto'] ?></td>
                <td class="item"><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=listarUno&id=' . $gato["id"]; ?>>Details</a></td>
                <td class="item"><a href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=update&id=' . $gato["id"]; ?>>Edit</td>
                <td class="item"><a class="delete" href=<?php echo '/DWS/DWES-UD6/MVCGatos/index.php?controller=gatos&action=delete&id=' . $gato["id"]; ?>>Delete</a></td>
            </tr>

        <?php
        }
        ?>

    </table>
    </div>

</body>

</html>