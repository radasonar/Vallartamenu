/*********************************************************

					! - Eventos - ¡

*********************************************************/
$('#login').on('submit', function(e) {
	e.preventDefault();
	var user = $('#login input[name=user]').val();
	var pass = $('#login input[name=pass]').val();
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
			if(respuesta == "1"){
				$(location).attr('href','index.php');
			}else{
				$('#msjLogin').html(respuesta);
			}
		}else{
			$('#msjLogin').html("Ingresa tu contraseña.")
			$('#divPass').addClass('has-error');
		$('#login input[name=pass]').focus();
		}
	}else{
		$('#msjLogin').html("Ingresa tu cuenta de correo.")
		$('#divUser').addClass('has-error');
		$('#login input[name=user]').focus();
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
		case 0:{ $('#contenido').load('php/cliente/cliente_contenido_detalles.php'); setTimeout(detalles,400); break;}
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
function editarPlatillo(e,id) {
	abrirVentana();
	$('.contenidoVentana').load('php/cliente/cliente_contenido_editar_platillo.php',{id:e, id_platillo: id});
}
function guardarEditarPlatillo() {
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
					$('#msjPlatillo').html("Ha ocurrido un error, favor de intentarlo mas tarde.");
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
function guardarDetalles() {
	/* Obligatorios */
	var nombreLugar = $('input[name=nombreLugar]').val();
	var direccion = $('input[name=direccion]').val();
	var tipoLugar = "";
					$('input[name="tipoLugar[]"]:checked').each(function() {
						tipoLugar += $(this).val()+",";
					});
					tipoLugar = tipoLugar.substring(0, tipoLugar.length-1);

	var descripcion = $('textarea[name=descripcion]').val();
	var tipoCocina = "";
					$('input[name="tipoCocina[]"]:checked').each(function() {
						tipoCocina += $(this).val() + ",";
					});
					//eliminamos la última coma.
					tipoCocina = tipoCocina.substring(0, tipoCocina.length-1);

	/* No Obligatorios */
	var nombrePropietario = $('input[name=nombrePropietario]').val();
	var pagina = $('input[name=pagina]').val();

	/* Sin revisar */
	var zona = $('select[name=zona]').val();
	var diaApertura = $('select[name=diaApertura]').val();
	var diaCierre = $('select[name=diaCierre]').val();
	var horaApertura = $('select[name=horaApertura]').val();
	var horaCierre = $('select[name=horaCierre]').val();

	if(nombreLugar != false){
	$('.nombreLugar').removeClass('has-error').removeAttr('title');
		if(direccion != false){
		$('.direccion').removeClass('has-error').removeAttr('title');
			if(tipoLugar != false){
			$('.tipoLugar').removeClass('has-error').removeAttr('title');
				if(tipoCocina != false){
				$('.tipoCocina').removeClass('has-error').removeAttr('title');
					if(descripcion != false){
					$('.descripcion').removeClass('has-error').removeAttr('title');
						var respuesta = '';
						$.ajax({
							type: 'POST',
							url: 'php/cliente/cliente_guardar_detalles.php',
							async: false,
							data:{nombreL:nombreLugar, nombreP:nombrePropietario, dir:direccion, zon:zona, diaA:diaApertura, diaC:diaCierre, horaA:horaApertura, horaC:horaCierre, pag:pagina, tipoL:tipoLugar, tipoC: tipoCocina, descrip: descripcion},
							success: function(e) {
								respuesta = e;
							}
						});
						if(respuesta == "1"){
							abrirVentana();
							$('.contenidoVentana').html('Se guardo correctamente.');
							setTimeout(cerrarVentana, 3000);
						}else{
							abrirVentana();
							$('.contenidoVentana').html('Ha ocurrido un error al intentar guardar la informacion.');
							setTimeout(cerrarVentana, 3000);
						}
					}else{
						$('.descripcion').addClass('has-error').attr('title','La descripcion solo puede contener letras y numeros');
					}
				}else{
					$('.tipoCocina').addClass('has-error').attr('title','Selecciona almenos 1 opcion');
				}
			}else{
				$('.tipoLugar').addClass('has-error').attr('title','Selecciona almenos 1 opcion')
			}
		}else{
			$('.direccion').addClass('has-error').attr('title','La direccion solo puede contener, letras, numeros y guines bajos');
		}
	}else{
		$('.nombreLugar').addClass('has-error').attr('title','Ingresa el Nombre del Lugar, no puede estar vacio');
	}

	/*
	if(nombreLugar.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/)){
	$('.nombreLugar').removeClass('has-error').removeAttr('title');
		if(nombrePropietario == "" || nombrePropietario.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ\s]+$/)){
		$('.nombrePropietario').removeClass('has-error').removeAttr('title');
			if(direccion.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ\s]+$/)){
			$('.direccion').removeClass('has-error').removeAttr('title');
				if(pagina != "" || pagina.match(/^(ht|f)tps?:\/\/\w+([\.\-\w]+)?\.([a-z]{2,6})?([\.\-\w\/_]+)$/i)){
					if(tipoCocina != ""){
					$('.tipoCocina').removeClass('has-error').removeAttr('title');
						if(descripcion.match(/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ\s]+$/)){
							var respuesta = '';
							$.ajax({
								type: 'POST',
								url: 'php/cliente/cliente_guardar_detalles.php',
								async: false,
								data:{nombreL:nombreLugar, nombreP:nombrePropietario, dir:direccion, zon:zona, hor:horario, pag:pagina}
							});
						}else{
							$('.descripcion').addClass('has-error').attr('title','La descripcion solo puede contener letras y numeros');
						}
					}else{
						$('.tipoCocina').addClass('has-error').attr('title','Selecciona almenos 1 opcion');
					}
				}else{
					$('.pagina').addClass('has-error').attr('title','La url no es valida');
				}
			}else{
				$('.direccion').addClass('has-error').attr('title','La direccion solo puede contener, letras, numeros y guines bajos');
			}
		}else{
			$('.nombrePropietario').addClass('has-error').attr('title','El nombre del Propietario solo puede llevar letras');
		}
	}else{
		$('.nombreLugar').addClass('has-error').attr('title','Ingresa el Nombre del Lugar, no puede estar vacio');
	}
	*/
}
function transicion() {
	$('#contenido').hide().fadeIn();
}
function abrirVentana() {
	$('.ventana').fadeIn();
}
function cerrarVentana() {
	$('.ventana').fadeOut();
	$('.contenidoVentana').delay(1000).html("");
} 