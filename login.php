<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>Login - Vallarta.menu</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="cajita">
		<form action="php/lg_conectar.php" method="post">
			<div class="form-group"><label>Usuario: </label><input type="text" name="user" placeholder="Usuario ó Correo electronico..."></div>
			<div class="form-group"><label>Contraseña: </label><input type="password" name="pass" placeholder="Contraseña"></div>
			<div class="form-group"><a href="#" class="olvido">¿Olvidaste tu contraseña?</a><input type="submit" value="Enviar"></div>
		</form>
	</div>
</body>
</html>