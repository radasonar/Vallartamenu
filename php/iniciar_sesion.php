<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","bd_vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$correo = $_POST['use'];
$pass = $_POST['pas'];

/*
$hoy = date("G");
$hoy = $hoy - 1;
$hoy = $hoy.":".date("i");
$hoy = date("j-M-Y")." ".$hoy;
*/

$hoy = date("j-M-Y");

$sql = mysql_query("SELECT * FROM tb_info_admin WHERE correo = '$correo'");

if($f = mysql_fetch_array($sql)){
	if($pass == $f['password']){		
		$id = $f['id'];
		if(mysql_query("UPDATE tb_info_admin SET ult_login = '$hoy' WHERE id = '$id'")){
			session_start();
			$_SESSION['usuario'] = $f['correo'];
			$_SESSION['tipo_admin'] = $f['tipo_admin'];
			$_SESSION['id_admin'] = $id;			
			$tipo = $f['tipo_admin'];

			echo $tipo;
		}
	}
}
?>