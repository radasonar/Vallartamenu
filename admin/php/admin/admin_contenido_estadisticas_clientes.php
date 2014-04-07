<div class="seccion form-horizontal">
	<h1 class="seccionTitulo">Registro de los Clientes</h1>
	<hr>
	<div class="table-responsive tabla">
		<table class="table table-hover table-striped table-bordered">
		  <caption class="tituloTabla">Clientes</caption>
		  <thead>
		    <tr class="btn-primary">
		    	<th>ID</th>
			    <th>Nombre</th>
			    <th>Correo</th>
			    <th>Privilegios</th>
			    <th>Accion</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
				define("HOST","127.0.0.1");
				define("USER","root");
				define("PASS","");
				define("DB","bd_vallartamenu");

				@mysql_connect(HOST,USER,PASS);
				@mysql_select_db(DB);

		    	$sql = mysql_query("SELECT id, nombre_lugar, correo, tipo_admin FROM tb_info_admin WHERE tipo_admin = '2' OR tipo_admin = '3' ORDER BY id DESC LIMIT 0, 10");
		    	while($f = mysql_fetch_array($sql)){
		    		$id = $f['id'];
		    		$nombre = $f['nombre_lugar'];
		    		$correo = $f['correo'];
		    		$tipo = $f['tipo_admin'];
		    		if($tipo == "2"){ $tipo = "No"; }else{ $tipo = "Si"; }

		    		echo "<tr>";
		    			echo "<td>".$id."</td>";
		    			echo "<td>".$nombre."</td>";
		    			echo "<td>".$correo."</td>";
		    			echo "<td>".$tipo."</td>";
		    			echo "<td>Accion</td>";
		    		echo "</tr>";
		    	}
		    ?>
		  </tbody>
		</table>
	</div>
</div><!-- SECCION -->