<html>

<head>
    <title>Catálogo libros</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./views/view.js"></script>
    <script src="./views/search.js"></script>

    <link rel="stylesheet" href="./css/main.css" />


</head>

<body style="font-size: 1rem;">

    <div class="row">
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
                    <div>
                        <form class="d-flex" action=<?php echo "./index.php?controller=gatos&action=search" ?> method="POST">
                            <input autocomplete="off" name="input" id="inputSearch" class="form-control me-2" type="text" aria-label="Search">
                            <input class="btn btn-outline-danger btnSearch" type="submit" value="Search">

                        </form>
                        <div style="position: absolute;background-color:bisque; width: 250px; top:50px; border-radius: 2px ; border: solid black 1px" class="sugerencias">
                            <ul style="list-style-type: none"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>



    <div class="container-fluid mt-5 d-flex flex-column align-items-center">
        <div class="row d-flex align-items-center w-75">
            <div class="col-10">
                <h1>Gatos:</h1>
            </div>

            <?php if (!isset($_GET["action"]) || $_GET["action"] == "listar") {
            ?>
                <div class="col-2 bg-success d-flex align-items-center" style="border-radius: 10px;height:35px; width: 111px">
                    <a class="text-light text-decoration-none" href="./index.php?controller=gatos&action=create">Crear Gato</a>
                </div>
            <?php } ?>
        </div>

        <div class="table-responsive col-lg-9 col-12">
            <table class="table table-hover mt-3">
                <thead class="table-dark">
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
                    <tr id=<?php echo $gato["id"]; ?>>
                        <td class="item"><?php echo $gato['nombre'] ?></td>
                        <td class="item"><?php echo $gato['dni'] ?></td>
                        <td class="item"><?php echo $gato['edad'] ?></td>
                        <td class="item"><?php echo $gato['sexo'] ?></td>
                        <td class="item"><?php echo $gato['raza'] ?></td>
                        <td class="item"><?php echo $gato['fechaAlta'] ?></td>
                        <td class="item"><?php echo $gato['foto'] ?></td>
                        <td class="item text-center"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="details"><i class="fas fa-info-circle text-info"></i></a></td>
                        <td class="item text-center"><a href=<?php echo './index.php?controller=gatos&action=update&id=' . $gato["id"]; ?>><i class="fas fa-edit text-primary"></i></td>
                        <td class="item text-center"><a class="delete"><i class="fas fa-trash text-danger"></i></a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>