$(document).ready(function () {
  $(".delete").click(function (e) {
    var $removeBtn = $(this);
    var id = $removeBtn.parent().parent().attr("id");
    var a = new XMLHttpRequest();
    var response = "";
    response = prompt("Do you really want to delete the cat??Y/N");
    a.onreadystatechange = function () {
      if (a.readyState == 4 && a.status == 200) {
        $removeBtn.parent().parent().remove();
      }
    };
    if (response.toUpperCase() == "Y") {
      a.open(
        "DELETE",
        "./index.php?controller=gatos&action=delete&id=" + id,
        true
      );
      a.send();
    }
  });

  $(".details").click(function (e) {
    var $detailsbtn = $(this);
    var id = $detailsbtn.parent().parent().attr("id");
    var a = new XMLHttpRequest();
    /*function ImageExist(url) {
      var retorno=false;
      var img = new Image();
      img.setAttribute("src",url);
      
      return img.height != 0;
    }*/
    a.onreadystatechange = function (res) {
      if (a.readyState == 4 && a.status == 200) {
        var gato = JSON.parse(res.currentTarget.responseText);
        $(".modal-body").empty();
        $(".modal-body").append("<h2>" + gato[0].nombre + "</h2>");
        $(".modal-body").append("<h5> DNI: " + gato[0].dni + "</h5>");
        $(".modal-body").append("<h5>Edad: " + gato[0].edad + "</h5>");
        $(".modal-body").append("<h5>Sexo: " + gato[0].sexo + "</h5>");
        $(".modal-body").append("<h5>Raza: " + gato[0].raza + "</h5>");
        $(".modal-body").append("<h5>fechaAlta: " + gato[0].fechaAlta + "</h5>");
        if(gato[0].foto!=""){
          $(".modal-body").append(
            "<img alt='ImageNotFound' src='./images/" + gato[0].foto + "' width='200px'>"
          );
        }
        
      }
    };
    a.open(
      "GET",
      "./index.php?controller=gatos&action=listarUno&id=" + id,
      true
    );
    a.send();
  });
});
