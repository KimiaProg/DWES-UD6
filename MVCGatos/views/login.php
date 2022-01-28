<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <title>Document</title>
</head>

<body class="bg-dark">
        <div class="container pt-5 col-lg-3 bg-light mt-5" style="border-radius: 15px;">
            <h1 class="h1-responsive font-weight-bold text-center m-4 pb-2">Inicia Sesión</h1>
          
            <form action="./index.php?controller=users&action=login" method="POST" class=" px-5 pb-5 needs-validation " novalidate>
                <div class=" form-floating mb-3">
                    <input type="email" name="usu" class="form-control" placeholder="Usuario" id="validationCustom01" required>
                    <label for="floatingInput" class="form-label">Usuario</label>
                    <div class="valid-feedback">
                        Looks good!
                      </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="pass" class="form-control" placeholder="Password" required>
                    <label for="floatingInput">Password</label>
                    <div class="valid-feedback">
                        Looks good!
                      </div>
                </div>

                <button class="btn btn-outline-danger col-3 mt-3" style="margin-left: 110px;" type="submit">Send</button>
                <?php
                if (isset($_GET["error"])) {
                    echo "<div>" . $error . "</div>";
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>