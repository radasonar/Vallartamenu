<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$id = $_POST['i'];
$idPlatillo = $_POST['idp'];
$titulo = $_POST['tit'];
$precio = $_POST['pre'];
$descripcion = $_POST['desc'];

switch($id){
	case 1:{
		if(@mysql_query("UPDATE tb_entradas SET titulo = '$titulo', precio = '$precio', descripcion = '$descripcion' WHERE id = '$idPlatillo'")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	case 2:{
		if(@mysql_query("UPDATE tb_platillos_fuertes SET titulo = '$titulo', precio = '$precio', descripcion = '$descripcion' WHERE id = '$idPlatillo'")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	case 3:{
		if(@mysql_query("UPDATE tb_postres SET titulo = '$titulo', precio = '$precio', descripcion = '$descripcion' WHERE id = '$idPlatillo'")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	case 4:{
		if(@mysql_query("UPDATE tb_bebidas SET titulo = '$titulo', precio = '$precio', descripcion = '$descripcion' WHERE id = '$idPlatillo'")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
}
?>