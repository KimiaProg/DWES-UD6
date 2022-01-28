$(document).ready(function () {
	$(".delete").click(function (e) {
		var $removeBtn = $(this);
		var id = $removeBtn.parent().parent().attr("id");
		var a= new XMLHttpRequest();
		a.onreadystatechange= function(){
			if(a.readyState== 4 && a.status ==200){
				$removeBtn.parent().parent().remove();
			}
		}
		a.open("DELETE","./index.php?controller=gatos&action=delete&id="+id, true );
		a.send();

	});
});
