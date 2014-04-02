<div class="seccion form-horizontal">
	<h1 class="seccionTitulo">Bebidas</h1>
	<hr>
	<div class="seccionPrincipal">
		<figure class="agregar" onclick="abrirAgregarPlatillo(4)"></figure>
	</div>
	<div class="table-responsive tabla">
		<table class="table table-hover table-striped table-bordered">
		  <caption class="tituloTabla">Menu</caption>
		  <thead>
		    <tr class="btn-primary">
		      <th>Titulo</th>
		      <th>Descripción</th>
		      <th>Precio</th>
		      <th>Accion</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    define("HOST","127.0.0.1");
			define("USER","root");
			define("PASS","");
			define("DB","bd_vallartamenu");

			mysql_connect(HOST,USER,PASS);
			mysql_select_db(DB);
			session_start();
			$id_admin = $_SESSION['id_admin'];

			$sql = mysql_query("SELECT * FROM tb_bebidas WHERE tb_info_admin_id = '$id_admin' ORDER BY id DESC");
			$num = mysql_num_rows($sql);
			if($num > 0){
				while($f = mysql_fetch_array($sql)){
					$id = $f['id'];
					$titulo = $f['titulo'];
					$descripcion = $f['descripcion'];
					$precio = $f['precio'];

					echo "<tr>";
						echo "<td>".$titulo."</td>";
						echo "<td>".$descripcion."</td>";
						echo "<td>".$precio."</td>";
						echo '<td onclick="editarPlatillo(4,'.$id.')" class="editarPlatillo">Editar</td>';
					echo "</tr>";
				}
			}else{
				echo "<p class='text-center'>Aun no tienes ninguna bebida.</p>";
			}
		    ?>
		  </tbody>
		</table>
	</div>
</div><!-- SECCION -->