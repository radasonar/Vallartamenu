$(window).on('load', function() {		
	panel(0);
});
function panelAdmin(e) {
	switch(e){
		case 0:{ $('#contenido').load('php/admin/admin_contenido_detalles.php'); break;}
		case 1:{ $('#contenido').load('php/admin/admin_contenido_entradas.php'); break;}
		case 2:{ $('#contenido').load('php/admin/admin_contenido_platillos_fuertes.php'); break;}
		case 3:{ $('#contenido').load('php/admin/admin_contenido_postres.php'); break;}
		case 4:{ $('#contenido').load('php/admin/admin_contenido_bebidas.php'); break;}
	}
	transicion();
}
function panelSuperAdmin(e) {
	switch(e){
		case 0:{ $('#contenido').load('php/super/sp_admin_dar_altas.php'); break; }
		case 1:{ break; }
	}
	transicion();
}
function guardarPlatillo(e){
	var titulo = $('#titulo').val();
	var precio = $('#precio').val();
	var descripcion = $('#descripcion').val();

	if(titulo != false){
		if(precio != false){
			if(descripcion != false){
				$.ajax({
					type: 'POST',
					url: 'php/insertar_platillo.php',
					data:{
					id: e,
					tit: titulo,
					pre: precio,
					des: descripcion
					}
				}).done(function() {
						cerrarV();
				});
			}else{
				$('#divDescripcion').addClass('has-error').focus();
			}
		}else{
			$('#divPrecio').addClass('has-error').focus();
		}
	}else{
		$('#divTitulo').addClass('has-error').focus();
	}
}
function abrirAgregarPlatillo(e){
	abrirV();
	$('.contenidoVentana').load('php/frm_agregar_platillo.php',{ id: e});
}
function transicion() {
	$('#contenido').hide().fadeIn();
}
$('form#login').on('submit', function(e) {
	e.preventDefault();
	if(user != false){
		$('#divUser').removeClass('has-error');
		var user = $('input[name=user]').val();
		if(pass != false){
			var pass = $('input[name=pass]').val();
			$('#divPass').removeClass('has-error');
			
			var i = $.post("php/lg_conectar.php", { use: user, pas: pass });
				if(i.responseText == "4"){
					$(location).attr('href',"index.php");
				}else{
					alert("Ahi un error con sus datos.");
				}
			});
		}else{
			$('#divPass').addClass('has-error');
		}
	}else{
		$('#divUser').addClass('has-error');
	}
});
function abrirV() {
	$('.ventana').fadeIn();
}
function cerrarV() {
	$('.ventana').fadeOut();
}