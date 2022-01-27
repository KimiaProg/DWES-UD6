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

<body>
    
    <h2>Inicia sesión</h2>
    <div class="form">
        <form action="./index.php?controller=users&action=login" method="POST">
            <p>usuario:</p>
            <p><input id="1" type="text" placeholder="Ingrese su usuario" name="usu" required /><span></span></p>
            <p>Password:</p>
            <p><input id="2" type="password" placeholder="Ingrese su contraseña" name="pass" required /><span></span></p>
            <p><input id="boton" type="submit" value="Iniciar Sesion" /></p>
            <?php
            if(isset($_GET["error"])){
                echo "<div>".$error."</div>";
            }
            ?>        
        </form>
    </div>
</body>

</html>