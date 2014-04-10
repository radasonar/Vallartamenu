<?php
session_start();
if($_SESSION['usuario'] != ""){
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Backend Vallarta.Menu</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<section class="contedor">
		<div class="cabecera">
			<a href="index.php" class="regresar"><i class="icon-undo"></i> Regresar</a>
		</div>
		<div class="seccion">
			<h1 class="seccionTitulo">Sube tus Imagenes</h1>
			<hr>
				<div class="subcontenido container">
					<br>
					<center><img class="img-thumbnail" src="#" width="145" height="145" alt=""></center>
					<br>
						<form class="form-horizontal" role="form">
						  <div class="form-group has-feedback">
						    <label class="control-label col-sm-3">Imagen logotipo</label>
						    <div class="col-sm-6">
						      <input type="file" class="form-control">
						    </div>
						  	<div class="form-group col-sm-3">
						  		<input type="submit" class="btn btn-primary col-sm-12" value="Subir logo">	
						  	</div>
						  </div>
						</form>
					<br>
				</div>
		</div>
	</section><!-- Container -->
</body>
</html>
<?php
}else{
	header("Location: login.php");
}
?>