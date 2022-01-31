<?php
session_start();

if (!isset($_SESSION["logueado"])) {
    header("Location: ./index.php");
}
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
    echo json_encode($gatos);
    //include_once './views/gatosView.php';
}

function create()
{

    if (count($_POST) > 0) {
        include_once "./models/gatosModel.php";
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }
        $avatar = $_FILES["avatar"]["name"];
        $temp = $_FILES['avatar']['tmp_name'];
        if (move_uploaded_file($temp, './images/' . $avatar)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('./images/' . $avatar, 0777);
        }
        $cumplido = setGato(seguro($_POST["nombre"]), $_POST["dni"], $_POST["edad"], seguro($_POST["sexo"]), seguro($_POST["raza"]), $_POST["fechaAlta"], $avatar);
        if ($cumplido == true) {
            header("Location: ./index.php?controller=gatos&action=listar");
            exit();
        } else {
            header("Location: ./index.php?controller=gatos&action=create&error=si");
        }
    } else {
        include_once "./views/gatosForm.php";
    }
}


function update()
{
    include_once "./models/gatosModel.php";
    $id = $_GET["id"];
    $gatos = getGato($id);
    if (isset($_POST)  && count($_POST) > 0) {
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }
        //En el caso de que no haya subido ninguna imagen (no quiere cambiar la imagen), subiremos la misma imagen anterior de nuevo por defecto es una cadena vacia
        if ($_FILES["avatar"]["name"] != '') {
            $avatar = $_FILES["avatar"]["name"];
            $temp = $_FILES['avatar']['tmp_name'];

            if (move_uploaded_file($temp, './images/' . $avatar)) {
                //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                chmod('./images/' . $avatar, 0777);
            }
        } else {
            $avatar = $gatos[0]["foto"];
        }
        $cumplido = updateGato($id, seguro($_POST["nombre"]), $_POST["dni"], $_POST["edad"], seguro($_POST["sexo"]), seguro($_POST["raza"]), $_POST["fechaAlta"], $avatar);
        if ($cumplido == true) {
            header("Location: ./index.php?controller=gatos&action=listar");
            exit();
        } else {
            header("Location: ./index.php?controller=gatos&action=update&id=" . $id . "&error=si");
        }
    } else {
        include_once "./views/gatosForm.php";
    }
}


function delete()
{
    $id = $_GET["id"];
    include_once "./models/gatosModel.php";
    $cumplido = eliminarGato($id);
}


function search(){
    $nombre = $_POST["input"];
    include_once "./models/gatosModel.php";
    $gatos = getGatoNombre($nombre);
    include_once './views/gatosView.php';
}

function getGatosNombre(){
    require_once './models/gatosModel.php';
    $gatos = getGatos();
    echo json_encode($gatos);
}
