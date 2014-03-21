<?php
require_once('conexion.php');

$idUser = $_SESSION['idUser'];
$id = $_POST['id'];
$titulo = $_POST['tit'];
$precio = $_POST['pre'];
$descripcion = $_POST['des'];

switch($id){
	case 1:{
		mysql_query('INSERT INTO tb_entradas VALUES('','$idUser','$titulo','$descripcion','$precio')');
		break;
	}
	case 2:{
		break;
	}
	case 3:{
		break;
	}
	case 4:{
		break;
	}
	default:{
		break;
	}
}

?>