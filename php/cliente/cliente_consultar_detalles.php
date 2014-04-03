<?php
	define("HOST","127.0.0.1");
	define("USER","root");
	define("PASS","");
	define("DB","bd_vallartamenu");

	mysql_connect(HOST,USER,PASS);
	mysql_select_db(DB);

	session_start();
	$id_admin = $_SESSION['id_admin'];

	$consulta = mysql_query("SELECT * FROM tb_info_admin WHERE id = '$id_admin'");
	$f = mysql_fetch_object($consulta);
	$arreglo = array();
	$arreglo[] = array('nombreLugar' => $f['nombre_lugar'],
		'nombrePropietario' => $f['nombre_encargado'],
		'tipoLugar' => $f['tipo_lugar'],
		'tipoCocina' => $f['tipo_cocina'],
		'telefono' => $f['telefono'],
		'url' => $f['url'],
		'descripcion' => $f['descripcion'],
		'direccion' => $f['direccion'],
		'diaApertura' => $f['diaApertura'],
		'diaCierre' => $f['diaCierre'],
		'horaApertura' => $f['horaApertura'],
		'horaCierre' => $f['horaCierre'],
		'zona' => $f['zona'],
		'utlLogin' => $f['ult_login']);
	$json = json_encode($arreglo);
	echo $json;
?>