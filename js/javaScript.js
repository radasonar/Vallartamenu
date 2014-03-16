$(function() {
	
	panel(0);
	$('form').on('submit', procesarLogin);

	function transicion() {
			$('#contenido').hide().fadeIn();
	}
	function panel(id) {
			switch(id){
				case 0:{ $('#contenido').load('php/admin_contenido_detalles.php'); break;}
				case 1:{ $('#contenido').load('php/admin_contenido_entradas.php');	break;}
				case 2:{ $('#contenido').load('php/admin_contenido_platillos_fuertes.php'); break;}
				case 3:{ $('#contenido').load('php/admin_contenido_postres.php');	break;}
				case 4:{ $('#contenido').load('php/admin_contenido_bebidas.php');	break;}
				default:{ break;}
			}
		transicion();
	}
	function guardarPlatillo(ide){
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
								id: ide,
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
	function procesarLogin(e) {
		e.preventDefault();
			var user = $('input[name=user]').val();
			var pass = $('input[name=pass]').val();

			if(user != false){
				$('#divUser').removeClass('has-error');
				if(pass != false){
					$('#divPass').removeClass('has-error');
					$.ajax({
						type: 'POST',
						url: 'php/lg_conectar.php',
						data: {
							use: user,
							pas: pass
						}
					}).done(function() {
						alert("Se enviaron correctamente los datos");
					});	
				}else{
					$('#divPass').addClass('has-error');
				}
			}else{
				$('#divUser').addClass('has-error');
			}
	}
	function abrirAgregarPlatillo(ide){
		abrirV();
			$('.contenidoVentana').load('php/frm_agregar_platillo.php',{ id: ide});
	}
	function abrirV() {
			$('.ventana').fadeIn();
	}
	function cerrarV() {
			$('.ventana').fadeOut();
	}
});
