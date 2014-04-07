<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Vallarta.menu</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header class="cabecera contain-to-grid sticky">
		<nav class="top-bar" data-topbar>
		  <ul class="title-area">
		    <li class="name">
		      <h1><a href="#">Vallarta Menu</a></h1>
		    </li>
		    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
		  </ul>

		  <section class="top-bar-section">
		    <!-- Right Nav Section -->
		    <ul class="right">
		      <li><a href="#">Right Button Active</a></li>
		      <li class="has-dropdown">
		        <a href="#">Right Button Dropdown</a>
		        <ul class="dropdown">
		          <li><a href="#">First link in dropdown</a></li>
		        </ul>
		      </li>
		    </ul>

		    <!-- Left Nav Section -->
		    <ul class="left">
		      <li><a href="#"></a></li>
		    </ul>
		  </section>
		</nav>
	</header>
	<!-- <section class="row small-12 contenedor">	
		Mapa de Google
		<div id="map_canvas"></div>
	</section> -->
	<section class="row small-12 establecimientos contenedor">
		<!--
			Establecimientos
		-->
		<div class="row">
			<article class="large-4 medium-6 small-12 columns establecimiento">
				<figure class="logo th">
					<img src="//placehold.it/145x145" alt="">
				</figure>
				<p class="nombre">Nombre del Establecimiento</p>
				<p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero, nisi itaque dignissimos ut facere odio molestias.</p>
			</article>
			<article class="large-4 medium-6 small-12 columns establecimiento">
				<figure class="logo th">
					<img src="//placehold.it/145x145" alt="">
				</figure>
				<p class="nombre">Nombre del Establecimiento</p>
				<p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero, nisi itaque dignissimos ut facere odio molestias.</p>
			</article>
			<article class="large-4 medium-6 small-12 columns establecimiento">
				<figure class="logo th">
					<img src="//placehold.it/145x145" alt="">
				</figure>
				<p class="nombre">Nombre del Establecimiento</p>
				<p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero, nisi itaque dignissimos ut facere odio molestias.</p>
			</article>			
		</div>
	</section>
	<section class="row small-12 contenedor">
		<a href="" class="button primary">Boton</a>
		<a href="" class="button primary">Boton</a>
		<a href="" class="button primary">Boton</a>		
	</section>
	<footer class="pie bg-fblue">
		Todos los derechos reservados.
	</footer>
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      $(document).foundation();
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(20.6687322, -105.243568),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>