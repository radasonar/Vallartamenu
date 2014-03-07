function detalles(){
	e = new XMLHttpRequest();
	e.open("GET","php/admin_contenido_detalles.php",true);
	e.onreadystatechange = function(){
		if(e.readyState){
			$(function(){
				$('#contenido').html(e.responseText);
			});
		}
	}
	e.send(null);
}
