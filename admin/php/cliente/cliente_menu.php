<div class="row cabeceraMenu">
	<h2 class="tituloPanel"><?php echo $nombreLugar; ?></h2>
	<figure class="avatar">
		<img class="img-thumbnail" src="http://placehold.it/145x145">
	</figure>
</div>
<div class="row item-menu" onclick="panelCliente(0)">Detalles</div>
<div class="row item-menu desplegable">Menús <i class="icon-arrow-down"></i></div>
<div class="contenidoDesplegable">
	<div class="row item-submenu" onclick="panelCliente(1)">Entradas</div>
	<div class="row item-submenu" onclick="panelCliente(2)">Platos Fuertes</div>
	<div class="row item-submenu" onclick="panelCliente(3)">Postres</div>
	<div class="row item-submenu" onclick="panelCliente(4)">Bebidas</div>
</div>
<div class="row item-menu" onclick="panelCliente(5)">Comentarios</div>
<div class="row item-menu cerrarSesion">Cerrar Sesión</div>