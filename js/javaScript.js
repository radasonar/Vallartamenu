function panel(id) {
	e = new XMLHttpRequest();
	switch(id){
		case 0:{ e.open('GET','php/admin_contenido_detalles.php',true); break;}
		case 1:{ e.open('GET','php/admin_contenido_entradas.php',true);	break;}
		case 2:{ e.open('GET','php/admin_contenido_platillos_fuertes.php',true); break;}
		case 3:{ e.open('GET','php/admin_contenido_bebidas.php',true);	break;}
		case 4:{ e.open('GET','php/admin_contenido_postres.php',true);	break;}
	}
	e.onreadystatechange = function() {
		if (e.readyState == 4) {
			$(function() {
				$('#contenido').html($(e.responseText).fadeIn());
			});
		}
	}
	e.send(null);
}