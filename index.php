<?php
session_start();
if($_SESSION['usuario'] != ""){
	
$tipo = $_SESSION['tipo_admin'];
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

</body>
</html>
<?php
}else{
	header("Location: login.php");
}
?>