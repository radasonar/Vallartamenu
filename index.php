<?php
session_start();
if($_SESSION['usuario'] != ""){
	$tipo = $_SESSION['tipo_admin'];
	define("HOST","127.0.0.1");
	define("USER","root");
	define("PASS","");
	define("DB","bd_vallartamenu");

	mysql_connect(HOST,USER,PASS);
	mysql_select_db(DB);

	$id_admin = $_SESSION['id_admin'];

	$consulta = mysql_query("SELECT * FROM tb_info_admin WHERE id = '$id_admin'");
	$f = mysql_fetch_array($consulta);

	$nombreLugar = $f['nombre_lugar'];
	$nombrePropietario = $f['nombre_encargado'];
	$direccion = $f['direccion'];
	$zona = $f['zona'];
	$diaApertura = $f['diaApertura'];
	$diaCierre = $f['diaCierre'];
	$horaApertura = $f['horaApertura'];
	$horaCierre = $f['horaCierre'];
	$url = $f['url'];
	$tipoLugar = $f['tipo_lugar'];
	$tipoCocina = $f['tipo_cocina'];
	$descripcion = $f['descripcion'];
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Backend Vallarta.Me</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="ventana"><div class="contenidoVentana"></div></div>
	<div class="contedor">
		<div class="row">
			<div class="col-xs-3 ">
				<section>
					<div class="row panel">
						<?php 
							switch($tipo){
								case 2:{ require_once("php/cliente/cliente_menu.php"); break; }
								case 4:{ require_once("php/admin/admin_menu.php"); break; }
							}
						?>
					</div>
				</section>
			</div>
			<div class="col-xs-9 nopadding">
				<div id="contenido" class="row">

				</div>
			</div>
		</div><!-- row -->
	</div><!-- Container -->
	<div class="ventana">
		<div class="contenidoVentana"></div>
	</div>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/javaScript.js"></script>
	<script>
		var accion = <?php echo $tipo; ?>;
		switch(accion){
			case 2:{ panelCliente(0);
	var nombreLugar = "<?php echo $nombreLugar; ?>";
	var nombrePropietario = "<?php echo $nombrePropietario; ?>";
	var direccion = "<?php echo $direccion; ?>";
	var zona = "<?php echo $zona; ?>";
	var diaApertura = "<?php echo $diaApertura; ?>";
	var diaCierre = "<?php echo $diaCierre; ?>";
	var horaApertura = "<?php echo $horaApertura; ?>";
	var horaCierre = "<?php echo $horaCierre; ?>";
	var url = "<?php echo $url; ?>";
	var tipoLugar = '('+"<?php echo $tipoLugar; ?>"+')';
	var tipoCocina = '('+"<?php echo $tipoCocina; ?>"+')';
	var descripcion = "<?php echo $descripcion; ?>";
	setTimeout(function() {
		$('input#nombreLugar').val(nombreLugar);
		$('input#nombrePropietario').val(nombrePropietario);
		$('input#direccion').val(direccion);
		$('select#zona').val(zona);
		$('select#diaApertura').val(diaApertura);
		$('select#diaCierre').val(diaCierre);
		$('select#horaApertura').val(horaApertura);
		$('select#horaCierre').val(horaCierre);
		$('input#pagina').val(url);
		$('textarea#descripcion').val(descripcion);
		$.each(tipoLugar, function(i) {
			var valor = tipoLugar[i];
			$('input[name="tipoLugar[]"][type="checkbox"][value="'+valor+'"]').attr('checked');
		});
		$.each(tipoCocina, function(i) {
			var valor = tipoCocina[i];
			$('input[name="tipoCocina[]"][type=checkbox][value="'+valor+'"]').attr('checked');
		});
		console.log(nombreLugar);
		console.log(nombrePropietario);
		console.log(direccion);
		console.log(zona);
		console.log(diaApertura);
		console.log(diaCierre);
		console.log(horaApertura);
		console.log(horaCierre);
		console.log(url);
		console.log(descripcion);
		console.log(tipoLugar);
		console.log(tipoCocina);
	},400);
			break;}
			case 3:{ break;}
			case 4:{ panelAdmin(1); break;}
			default:{ break;}
		}
	</script>
</body>
</html>
<?php
}else{
	header("Location: login.php");
}
?>