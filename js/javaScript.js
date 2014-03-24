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
			var respuesta = '';
			$.ajax({type: 'POST',
					url: 'php/iniciar_sesion.php',
					async: false,
					data: {use: user,pas: pass},
					success : function(text) {
						respuesta = text;
					}
				});
			if(respuesta == "2" || respuesta == "3"){
				$(location).attr('href','index.php');
			}else{
				$(location).attr('href','index.php');
			}
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
		case 1:{ $('#contenido').load('php/admin/admin_contenido_estadisticas_clientes.php'); break; }
	}
	transicion();
}
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
			$('.altaCliente input[name=pass]').focus();
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
function agregarPlatillo(e) {
	var titulo = $('form#frmPlatillo input[name=titulo]').val();
	var precio = $('form#frmPlatillo input[name=precio]').val();
	var descripcion = $('form#frmPlatillo textarea[name=descripcion]').val();

	if(titulo != false){
		$('#divTitulo').removeClass('has-error');
		if(precio != false){
			$('#divPrecio').removeClass('has-error');
			if(descripcion != false){
				$('#divDescripcion').removeClass('has-error');
				var respuesta = '';
				$.ajax({
					type: 'POST',
					url: 'php/cliente/insertar_platillo.php',
					async: false,
					data:{id_menu:e, title:titulo, price:precio, description:descripcion},
					success: function(text) {
						respuesta = text;
					}
				});
				if(respuesta == "1"){
					cerrarVentana();
					panelCliente(e);
				}else{
					$('#msjPlatillo').html("Ha ocurrido un erorr, favor de intentarlo mas tarde.");
				}
			}else{
				$('#msjPlatillo').html("Ingresa una breve descripcion de tu platillo.");
				$('#divDescripcion').addClass('has-error');
			}
		}else{
			$('#msjPlatillo').html("Ingresa el precio total de tu platillo.")
			$('#divPrecio').addClass('has-error');
		}
	}else{
		$('#msjPlatillo').html("Ingresa el Titulo de tu Platillo.");
		$('#divTitulo').addClass('has-error');
	}
}