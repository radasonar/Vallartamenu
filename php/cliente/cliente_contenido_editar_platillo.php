<?php
	define("HOST","127.0.0.1");
	define("USER","root");
	define("PASS","");
	define("DB","bd_vallartamenu");

	mysql_connect(HOST,USER,PASS);
	mysql_select_db(DB);

	$id_platillo = $_POST['id_platillo'];
	$id = $_POST['id'];

	switch($id){
		case 1:{
			$sql_platillo = mysql_query("SELECT * FROM tb_entradas WHERE id = '$id_platillo'");
			$f_platillo = mysql_fetch_array($sql_platillo);
			echo '<h3 class="tituloVentana">Editar Entrada</h3>';
			break;
		}
		case 2:{
			$sql_platillo = mysql_query("SELECT * FROM tb_platillos_fuertes WHERE id = '$id_platillo'");
			$f_platillo = mysql_fetch_array($sql_platillo);
			echo '<h3 class="tituloVentana">Editar Platillo Fuerte</h3>';
			break;
		}
		case 3:{
			$sql_platillo = mysql_query("SELECT * FROM tb_postres WHERE id = '$id_platillo'");
			$f_platillo = mysql_fetch_array($sql_platillo);
			echo '<h3 class="tituloVentana">Editar Postre</h3>';
			break;
		}
		case 4:{
			$sql_platillo = mysql_query("SELECT * FROM tb_bebidas WHERE id = '$id_platillo'");
			$f_platillo = mysql_fetch_array($sql_platillo);			
			echo '<h3 class="tituloVentana">Editar Bebida</h3>';
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
			<input class="form-control" value="<?php echo $f_platillo['titulo']; ?>" name="titulo" type="text">
		</div>
	</div>
	<div class="form-group" id="divPrecio">
		<label class="col-sm-3">Precio</label>
		<div class="col-sm-12">
			<input class="form-control" value="<?php echo $f_platillo['precio']; ?>" name="precio" type="text">
		</div>
	</div>	
	<div class="form-group" id="divDescripcion">
		<label class="col-sm-3">Descripcion</label>
		<div class="col-sm-12">
			<textarea class="form-control" cols="30" name="descripcion" rows="7"><?php echo $f_platillo['descripcion']; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3"></label>
		<div class="col-sm-12">
			<input type="button" class="btn btn-primary pull-right" value="Guardar" onclick="guardarEditarPlatillo(<?php echo $id.",".$id_platillo; ?>)">
			<input type="button" class="btn btn-default pull-right cancelar" value="Cancelar" onclick="cerrarVentana()">
		</div>
	</div>
</form>