$(document).ready(function () {
    $("#inputSearch").on("input", search);

    function search(e) {
        var nombre = e.currentTarget.value;
        var a = new XMLHttpRequest();
        var gatosFiltardos;
        a.onreadystatechange = function (res) {
            if (a.readyState == 4 && a.status == 200) {
                var gatos = JSON.parse(res.currentTarget.responseText);
                gatosFiltardos = gatos.filter((gato) => {
                    return gato["nombre"].startsWith(nombre);
                });

                if ($("#inputSearch").attr("value") != '') {
                    $(".sugerencias ul").empty();
                    [...gatosFiltardos].forEach(gato => {
                        var li = document.createElement("li");
                        li.appendChild(document.createTextNode(gato["nombre"]));
                        $(".sugerencias ul").append(li);
                    });
                    //$(".sugerencias").toggle();
                }else{
                    $(".sugerencias ul").empty();
                }


            }
        };
        a.open(
            "GET",
            "./index.php?controller=gatos&action=getGatosNombre",
            true
        );
        a.send();

    }

});
