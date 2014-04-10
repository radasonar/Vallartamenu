<div class="seccion form-horizontal">
	<h1 class="seccionTitulo">Detalles</h1>
	<hr>
	<!-- Visitas -->
	<div class="seccionPrincipal">
		<div class="pull-right visita-menu">Visitas a tu menu <strong>1000</strong></div>
	</div>
	<!-- Boton Subir Imagenes -->
	<div class="form-group">
		<label for="imgLogo" class="col-sm-3 control-label"></label>
		<div class="col-sm-4">
			<a href="imagenes.php" class="btn btn-primary col-sm-12">Subir Imagenes</a>
		</div>
	</div>
	<!-- Propietario-->
	<div class="form-group nombrePropietario">
	    <label for="nombrePropietario" class="col-sm-3 control-label">Propietario</label>
	    <div class="col-sm-4">
	      <input class="form-control" id="nombrePropietario" name="nombrePropietario" placeholder="Nombre del Propietario" type="text">
	    </div>
	</div>
	<!-- Direccion-->
	<div class="form-group direccion">
	    <label for="direccion" class="col-sm-3 control-label">Dirreción<strong class="text-danger">*</strong></label>
	    <div class="col-sm-4">
	      <input class="form-control" id="direccion" name="direccion" placeholder="Dirreción" type="text">
	    </div>
	</div>
	<!-- Nombre del Lugar -->
	<div class="form-group telefono">
	    <label for="telefono" class="col-sm-3 control-label">Telefono<strong class="text-danger">*</strong></label>
	    <div class="col-sm-4">
	      <input class="form-control" id="telefono" name="telefono" placeholder="Ej: 322-123-45-67" type="text">
	    </div>
	</div>
	<!-- ZONA-->
	<div class="form-group zona">
	    <label for="zona" class="col-sm-3 control-label">Zona <strong class="text-danger">*</strong></label>
	    <div class="col-sm-4">
		    <select class="form-control" id="zona" name="zona">
	      		<option value="Bucerias">Bucerias</option>
	      		<option value="Fluvial">Fluvial</option>
	      		<option value="Marina Vallarta">Marina Vallarta</option>
	      		<option value="Nuevo Vallarta">Nuevo Vallarta</option>
	      		<option value="Olas Altas">Olas Altas</option>
	      		<option value="San Pancho">San Pancho</option>
	      		<option value="Sayulita">Sayulita</option>
	      		<option value="Vallarta Centro">Vallarta Centro</option>
	        </select>
	    </div>
	</div>
	<!-- HORARIO-->
	<div class="form-group">
	    <label class="col-sm-3 control-label">Horario <strong class="text-danger">*</strong></label>
		<div class="col-sm-4">
		  	<form class="form-inline" role="form">
				<select class="form-control" id="diaApertura" name="diaApertura">
					<optgroup label="De">
					<?php
						for($d = 1; $d <= 7; $d++) {
							switch($d){
								case 1:{ echo '<option value="Lunes">Lunes</option>'; break;}
								case 2:{ echo '<option value="Martes">Martes</option>'; break;}
								case 3:{ echo '<option value="Miercoles">Miercoles</option>'; break;}
								case 4:{ echo '<option value="Jueves">Jueves</option>'; break;}
								case 5:{ echo '<option value="Viernes">Viernes</option>'; break;}
								case 6:{ echo '<option value="Sabado">Sabado</option>'; break;}
								case 7:{ echo '<option value="Domingo">Domingo</option>'; break;}
								default:{ break;}
							}
						}
					?>
					</optgroup>
				</select><!-- diaApertura-->
				A
				<select class="form-control" id="diaCierre" name="diaCierre">
					<optgroup label="A">
					<?php
						for($d = 1; $d <= 7; $d++) {
							switch($d){
								case 1:{ echo '<option value="Lunes">Lunes</option>'; break;}
								case 2:{ echo '<option value="Martes">Martes</option>'; break;}
								case 3:{ echo '<option value="Miercoles">Miercoles</option>'; break;}
								case 4:{ echo '<option value="Jueves">Jueves</option>'; break;}
								case 5:{ echo '<option value="Viernes">Viernes</option>'; break;}
								case 6:{ echo '<option value="Sabado">Sabado</option>'; break;}
								case 7:{ echo '<option value="Domingo">Domingo</option>'; break;}
								default:{ break;}
							}
						}
					?>
					</optgroup>
				</select><!-- diaCierre -->
			</form><!-- form-inline-1-->
		</div>
		<div class="col-sm-4">
			<form class="form-inline" role="form">
				<select class="form-control" id="horaApertura" name="horaApertura">
				   	<optgroup label="De">
					<?php
						for($ha = 0; $ha <= 11; $ha++) {
							print ('<option value="'.$ha.'.00 am">'.$ha.'.00 am</option>');
							print ('<option value="'.$ha.'.30 am">'.$ha.'.30 am</option>');
						}
					?>
					</optgroup>
				</select>
				A
				<select class="form-control" id="horaCierre" name="horaCierre">
				   	<optgroup label="A">
					<?php
						for($hc = 12; $hc <= 23; $hc++) {
							print ('<option value="'.$hc.'.00 pm">'.$hc.'.00 pm</option>');
							print ('<option value="'.$hc.'.30 pm">'.$hc.'.30 pm</option>');
						}
					?>
					</optgroup>
				</select>
			</form><!-- form-inline2-->
		</div>
	</div>
	<!--Pagina-->
	<div class="form-group pagina">
	    <label for="pagina" class="col-sm-3 control-label">Pagina</label>
	    <div class="col-sm-4">
	      <input class="form-control" id="pagina" name="pagina" placeholder="http://..." type="text">
	    </div>
	</div>
	<!-- Tipo de Lugar -->
	<div class="form-group">
	    <label class="col-sm-3 control-label">Tipo de Lugar <strong class="text-danger">*</strong></label>
	    <form class="form-inline" role="form">
		    <div class="col-sm-4 tipoLugar">
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoLugar[]" value="Cafe" type="checkbox"> Cafe
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoLugar[]" value="Restaurante" type="checkbox"> Restaurante
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoLugar[]" value="Bar" type="checkbox"> Bar
					</label>
		    	</div>		    			    	
			</div>
		</form>
	</div>
	<!-- Tipo de Cocina -->
	<div class="form-group tipoCocina">
	    <label class="col-sm-3 control-label">Tipo de cocina <strong class="text-danger">*</strong></label>
	    <form class="form-inline" role="form">
		    <div class="col-sm-5">
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Alemana" type="checkbox"> Alemana
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Americana" type="checkbox"> Americana
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Argentina" type="checkbox"> Argentina
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Cortes" type="checkbox"> Cortes
					</label>
		    	</div>
			</div>
		</form>
	</div>
	<div class="form-group">
	    <label class="col-sm-3 control-label"> </label>
	    <form class="form-inline" role="form">
		    <div class="col-sm-5">
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="China" type="checkbox"> China
					</label>
		    	</div>		    			    	
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Español" type="checkbox"> Española
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Francesa" type="checkbox"> Francesa
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Internacional" type="checkbox"> Internacional
					</label>
		    	</div>
			</div><!-- col-sm-4-->
		</form>
	</div>
	<div class="form-group">
	    <label class="col-sm-3 control-label"> </label>
	    <form class="form-inline" role="form">
		    <div class="col-sm-5">
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="India" type="checkbox"> India
					</label>
		    	</div>		    			    	
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Italia" type="checkbox"> Italiana
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Japonesa" type="checkbox"> Japonesa
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Mariscos" type="checkbox"> Mariscos
					</label>
		    	</div>
			</div><!-- col-sm-4-->
		</form>
	</div>
	<div class="form-group">
	    <label class="col-sm-3 control-label"> </label>
	    <form class="form-inline" role="form">
		    <div class="col-sm-5">
			    <div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Mexicana" type="checkbox"> Mexicana
					</label>
		    	</div>		    			    	
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Pizza" type="checkbox"> Pizza
					</label>
		    	</div>
		    	<div class="checkbox">
		    		<label>
				  		<input name="tipoCocina[]" value="Vegetariana" type="checkbox"> Vegetariana
					</label>
		    	</div>
		    </div>
		</form>
	</div>
	<!-- Descripcion -->
	<div class="form-group descripcion">
		<label for="descripcion" class="col-sm-3 control-label">Descripción <strong class="text-danger">*</strong></label>
	    <div class="col-sm-4">
	      <textarea class="form-control" cols="30" id="descripcion" name="descripcion" rows="7"></textarea>
	    </div>
	</div>
	<!-- Imagenes Establecimiento -->
	<div class="form-group" style="display:none;">
		<label class="col-sm-3 control-label">Subir imagenes del lugar</label>
		<div class="col-sm-5">
			<div class="row"><input type="file" class="form-control"></div><br>
			<div class="row"><input type="file" class="form-control"></div><br>
			<div class="row"><input type="file" class="form-control"></div><br>
			<div class="row"><input type="file" class="form-control"></div><br>
			<div class="row"><input type="file" class="form-control"></div><br>
			<div class="row"><input type="file" class="form-control"></div>
		</div>
	</div>
	<hr>
	<!-- IMPORTANTE -->
	<div class="form-group">
		<label class="col-sm-3 control-label text-danger">¡IMPORTANTE!</label>
		<div class="col-sm-5">
			<b>Todos los campos con <strong class="text-danger">*</strong> son requeridos.</b>
		</div>
	</div>
	<!-- Botones de Accion -->
	<div class="form-group">
		<label class="col-sm-3 control-label"> </label>
		<div class="col-sm-4">
			<input value="Guardar cambios" class="btn btn-primary pull-right" type="button" onclick="guardarDetalles()">
		</div>
	</div>
</div><!-- Seccion -->