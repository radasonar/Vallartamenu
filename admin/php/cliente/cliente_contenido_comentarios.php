<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","bd_vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);
session_start();
$id_admin = $_SESSION['id_admin'];
?>
<div class="seccion">
	<h1 class="seccionTitulo">Comentarios</h1>
	<hr>
	<section class="calificaciones">
		<article class="calificacion">
			Calidad
		</article>
		<article class="calificacion">
			Precios
		</article>
		<article class="calificacion">
			Servicio
		</article>
	</section>
	<hr>
	<section class="misComentarios">
		<?php		
		$sqlComentario = @mysql_query("SELECT * FROM tb_comentarios WHERE tb_info_admin_id = '$id_admin' ORDER BY id DESC");
		$numComentarios = @mysql_num_rows($sqlComentario);
		?>
		<div class="estadisticas">
			<span><?php echo $numComentarios; ?> Comentarios</span>
		</div>
		<?php
		while($fComentarios = @mysql_fetch_array($sqlComentario)){
			$nombre = $fComentarios['nombre'];
			$comentario = $fComentarios['comentario'];
			$respuesta = $fComentarios['respuesta'];
			$idComentario = $fComentarios['id'];
			?>
		<article>
			<h3 class="nombre"><?php echo $nombre; ?></h3>
			<p class="comentario"><?php echo $comentario; ?></p>
			<?php if($respuesta != ""){ ?><p class="respuesta"><?php echo $respuesta; ?></p><?php } ?>
			<div class="acciones">
				<span class="borrar">
					<i class="icon-remove"></i> Eliminar
				</span>
				<?php if($respuesta == ""){ ?><span class="responder">
					Responder <i class="icon-reply"></i>
				</span><?php } ?>
				<div class="form-group frm-responder">
					<textarea name="" rows="5" class="form-control" placeholder="Ingresa tu respuesta..."></textarea>
					<input type="button" class="btn btn-primary pull-right" value="Enviar">
					<input type="hidden" value="<?php echo $idComentario; ?>">
				</div>
			</div>
		</article>
		<?php } ?>
	</section>
</div>