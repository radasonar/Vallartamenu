<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>Login - Vallarta.menu</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="cajita">
		<h3 class="tituloLogin">Iniciar Sesion</h3>
		<hr>
		<form method="post" class="form-horizontal" id="login">
			<div class="form-group">
				<label class="col-sm-3"></label>
				<div class="col-sm-9 text-center" id="msjLogin"></div>
			</div>
			<div class="form-group" id="divUser">
				<label class="col-sm-3">Usuario: </label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="user">
				</div>
			</div>
			<div class="form-group" id="divPass">
				<label class="col-sm-3">Contraseña: </label>
				<div class="col-sm-9">
					<input class="form-control" type="password" name="pass">
				</div>
			</div>
			<div class="form-group">
				<a class="col-sm-6" href="#">¿Olvidaste tu contraseña?</a>
				<div class="col-sm-6">
					<input class="btn btn-primary pull-right" type="submit" value="Enviar">
				</div>
			</div>
		</form>
	</div>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/javaScript.js"></script>
</body>
</html>