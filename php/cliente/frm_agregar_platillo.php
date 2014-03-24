<?php
	$id = $_POST['id'];
	switch($id){
		case 1:{
			echo '<h3 class="tituloVentana">Agregar Entrada</h3>';
			break;
		}
		case 2:{			
			echo '<h3 class="tituloVentana">Agregar Platillo Fuerte</h3>';
			break;
		}
		case 3:{			
			echo '<h3 class="tituloVentana">Agregar Postre</h3>';
			break;
		}
		case 4:{			
			echo '<h3 class="tituloVentana">Agregar Bebida</h3>';
			break;
		}
		default:{ break;}
	}	
?>
<br>
<form class="form-horizontal" id="frmPlatillo">
	<div class="form-group">
		<label class="col-sm-3"></label>
		<div class="vol-sm-12" id="msjPlatillo"></div>
	</div>
	<div class="form-group" id="divTitulo">
		<label class="col-sm-3">Titulo</label>
		<div class="col-sm-12">
			<input class="form-control" placeholder="Titulo" name="titulo" type="text">
		</div>
	</div>
	<div class="form-group" id="divPrecio">
		<label class="col-sm-3">Precio</label>
		<div class="col-sm-12">
			<input class="form-control" placeholder="$" name="precio" type="text">
		</div>
	</div>	
	<div class="form-group" id="divDescripcion">
		<label class="col-sm-3">Descripcion</label>
		<div class="col-sm-12">
			<textarea class="form-control" cols="30" name="descripcion" placeholder="Descripcion" rows="7"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3"></label>
		<div class="col-sm-12">
			<input type="button" class="btn btn-primary pull-right" value="Guardar" onclick="agregarPlatillo(<?php echo $id; ?>)">
			<input type="button" class="btn btn-default pull-right cancelar" value="Cancelar" onclick="cerrarVentana()">
		</div>
	</div>
</form>