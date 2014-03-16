<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Backend Vallarta.Me</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery-2.1.0.min.js"></script>
</head>
<body>
	<div class="ventana"><div class="contenidoVentana"></div></div>
	<div class="contedor">
		<div class="row">
			<div class="col-xs-3 ">
				<section>
					<div class="row panel">
						<h1 class="tituloPanel">Panel</h1>
						<div class="row">
							<figure class="avatar"></figure>
						</div>
						<div class="row item-menu" onclick="panel(0)">Detalles</div>
						<div class="row item-menu" onclick="panel(1)">Entrada</div>
						<div class="row item-menu" onclick="panel(2)">Plato Fuerte</div>
						<div class="row item-menu" onclick="panel(3)">Postre</div>
						<div class="row item-menu" onclick="panel(4)">Bebidas</div>
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
	<script src="js/javaScript.js"></script>
</body>
</html>