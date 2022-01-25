<?php
function listar()
{
    require_once './models/gatosModel.php';
    $gatos = getGatos();
    include_once './views/gatosView.php';
}

function listarUno()
{
    require_once './models/gatosModel.php';
    $gatos = getGato($_GET['id']);
    include_once './views/gatosView.php';
}

function create()
{
    if (count($_POST) > 0) {
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }

        include_once "./models/gatosModel.php";
        $id = setGato(seguro($_POST["nombre"]), $_POST["dni"], $_POST["edad"], seguro($_POST["sexo"]), seguro($_POST["raza"]), $_POST["fechaAlta"], "ff");
        if ($cumplido == true) {
            header("Location: ./views/gatosView.php");
            exit();
        } else {
            $error = "Datos incorrectos o no se ha actualizado nada";
        }    }
}


function update()
{
    include_once "./models/gatosModel.php";
    if (count($_GET) > 0) {
        $id = $_GET["id"];
        $gato = getGato($id);
    } else {
        $id = $_POST["id"];
        $gato = getGato($id);
    }

    if (count($_POST) > 0) {
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }
        $cumplido = updateGato($id, seguro($_POST["nombre"]), $_POST["dni"], $_POST["edad"], seguro($_POST["sexo"]), seguro($_POST["raza"]), $_POST["fechaAlta"], "dd");
        if ($cumplido == true) {
            header("Location: ./views/gatosView.php");
            exit();
        } else {
            $error = "Datos incorrectos o no se ha actualizado nada";
        }
    }
}


function delete()
{
    $id = $_GET["id"];
    include_once "./models/gatosModel.php";
    $cumplido = eliminarGato($id);
    $error = 'Se ha borrado el gato con el id: ' . $id;
    echo $error;
}
