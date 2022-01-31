$(document).ready(function () {
    $(".sugerencias").hide();

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

                if (document.getElementById("inputSearch").value != '') {
                    $(".sugerencias ul").empty();
                    [...gatosFiltardos].forEach(gato => {
                        var li = document.createElement("li");
                        li.appendChild(document.createTextNode(gato["nombre"]));
                        $(li).attr("style","border-bottom:1px solid black");
                        $(".sugerencias ul").append(li);
                        $(li).on("click",function(e){
                            $("#inputSearch").val($(this).text());
                            $(this).css("background-color","grey");
                            $(".sugerencias").hide();
                        });

                        $(li).hover(function(e){
                            $(this).css("background-color","grey");
                        },function(e){
                            $(this).css("background-color","bisque");
                        } );

                      
                    });
                    $(".sugerencias").slideDown();
                }else{
                    $(".sugerencias ul").empty();
                    $(".sugerencias").slideUp();
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
