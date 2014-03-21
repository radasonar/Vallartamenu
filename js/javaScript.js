/*********************************************************

					! - Eventos - ¡

*********************************************************/
$('form#login').on('submit', function(e) {
	e.preventDefault();
	var user = $('input[name=user]').val();
	var pass = $('input[name=pass]').val();
	if(user != false){
		$('#divUser').removeClass('has-error');
		if(pass != false){
			$('#divPass').removeClass('has-error');

			$.ajax({
				url: 'php/iniciar_sesion.php',
				type: 'POST',
				data: {
					use: user,
					pas: pass
				}
			}).done(function() {
				$(location).attr('href','index.php')
			});
		}else{
			$('#divPass').addClass('has-error');
		}
	}else{
		$('#divUser').addClass('has-error');
	}
});
$('.cerrarSesion').on('click', function() {
	$(location).attr('href','php/cerrar_sesion.php');
});
/*********************************************************

					! - Funciones - ¡

*********************************************************/
function panelCliente(e) {
	switch(e){
		case 0:{ $('#contenido').load('php/cliente/cliente_contenido_detalles.php'); break;}
		case 1:{ $('#contenido').load('php/cliente/cliente_contenido_entradas.php'); break;}
		case 2:{ $('#contenido').load('php/cliente/cliente_contenido_platillos_fuertes.php'); break;}
		case 3:{ $('#contenido').load('php/cliente/cliente_contenido_postres.php'); break;}
		case 4:{ $('#contenido').load('php/cliente/cliente_contenido_bebidas.php'); break;}
	}
	transicion();
}
function panelAdmin(e) {
	switch(e){
		case 0:{ $('#contenido').load('php/admin/admin_contenido_alta_cliente.php'); break; }
		case 1:{ break; }
	}
	transicion();
}
/*
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
*/
function altaCliente(){
	var usuario = $('.altaCliente input[name=usuario]').val();
	var pass1 = $('.altaCliente input[name=pass]').val();

	if(usuario != false){
		$('.mensajes').html('');
		if(pass1 != false){
			$('.mensajes').html('');
			var respuesta = $.ajax({
				type: 'POST',
				url: 'php/admin/sql_alta_cliente.php',
				data: {user: usuario,pass: pass1},
				dataType: 'html'
				});
			respuesta.done(function() {
				$('.mensajes').html('El usuario se creo correctamente!');
				$('.altaCliente input[name=usuario]').val('');
				$('.altaCliente input[name=pass]').val('');
			});
		}else{
			$('.mensajes').html('Ingresa una contraseña.');
			$('.altaCliente input[name=pass1]').focus();
		}
	}else{
		$('.mensajes').html('Ingresa el nombre del usuario.');
		$('.altaCliente input[name=usuario]').focus();
	}
}
function abrirAgregarPlatillo(e){
	abrirVentana();
	$('.contenidoVentana').load('php/cliente/frm_agregar_platillo.php',{ id: e});
}
function transicion() {
	$('#contenido').hide().fadeIn();
}
function abrirVentana() {
	$('.ventana').fadeIn();
}
function cerrarVentana() {
	$('.ventana').fadeOut();
}