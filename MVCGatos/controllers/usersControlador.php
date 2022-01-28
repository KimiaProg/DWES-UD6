<?php
function login(){
    include_once "./models/usersModel.php";
    $error = '';
    session_start();
    if (isset($_SESSION["logueado"])) {
        header("Location: ./index.php?controller=gatos&action=listar");
    } else {
        if (count($_POST) > 0) {
            function seguro($valor)
            {
                $valor = strip_tags($valor);
                $valor = stripslashes($valor);
                $valor = htmlspecialchars($valor);
                return $valor;
            }
            $usu = seguro($_POST["usu"]);
            $pass = seguro($_POST["pass"]);
            $datosPers = getUser($usu);
            if ($datosPers != '') {
                if (password_verify($pass, $datosPers[0]["password"])) {
                    $_SESSION["logueado"] = true;
                    header("Location: ./index.php?controller=gatos&action=listar");
                    exit;
                } else {
                    $error = "Contraseña incorrecta o el usuario no existe";
                }
            } else {
                $error = "El usuario no existe";
            }
        }else{
            include_once "./views/login.php";
        }
    }
}
?>