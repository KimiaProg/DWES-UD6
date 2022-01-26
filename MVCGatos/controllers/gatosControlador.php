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
        $cumplido = setGato(seguro($_POST["nombre"]), $_POST["dni"], $_POST["edad"], seguro($_POST["sexo"]), seguro($_POST["raza"]), $_POST["fechaAlta"], "ff");
        if ($cumplido == true) {
            header("Location: ./index.php?controller=gatos");
            exit();
        } else {
            header("Location: ./views/gatosForm.php?id=" . $id . "&error=si");
        }
    }else{
        include_once "./views/gatosForm.php";
    }
}


function update()
{
    include_once "./models/gatosModel.php";
    $id = $_GET["id"];
   
    if (isset($_POST)  && count($_POST) > 0) {
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }
        $cumplido = updateGato($id, seguro($_POST["nombre"]), $_POST["dni"], $_POST["edad"], seguro($_POST["sexo"]), seguro($_POST["raza"]), $_POST["fechaAlta"], "dd");
        if ($cumplido == true) {
            header("Location: ./index?controller=gatos.php");
            exit();
        } else {
            header("Location: ./views/gatosForm.php?id=" . $id . "&error=si");
        }
    }else{
        $gatos= getGato($id);
        include_once "./views/gatosForm.php";
    }
    
   
}


function delete()
{
    $id = $_GET["id"];
    include_once "./models/gatosModel.php";
    $cumplido = eliminarGato($id);
    if($cumplido){
        header("Location: ./views/gatosBorrar.php?id=" . $id . "&error=no");

    }else{
        header("Location: ./views/gatosBorrar.php?id=" . $id . "&error=si");
    }

}
