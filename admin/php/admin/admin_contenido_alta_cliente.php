<div class="seccion">
	<h1 class="seccionTitulo">Agregar una Cuenta</h1>
	<hr>
	<div class="seccionPrincipal">
	</div><!-- Visitas -->
	<form method="post" class="form-horizontal altaCliente">
		<div class="form-group">
			<label for="" class="control-label col-sm-3"></label>
			<div class="col-sm-4 mensajes"></div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">Cuenta de correo:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" placeholder="Usuario" name="usuario">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-sm-3">Contraseña:</label>
			<div class="col-sm-4 form-horizontal">
				<input class="form-control" type="text" placeholder="Ingresa el password" name="pass">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3"></label>
			<div class="col-sm-4">
				<input class="btn btn-primary pull-right" type="button" value="Guardar" onclick="altaCliente()">
				<input class="btn btn-default pull-right cancelar" type="reset" value="Limpiar">
			</div>
		</div>
	</form>
</div><!-- Seccion -->