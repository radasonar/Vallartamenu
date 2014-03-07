<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","12345");
define("DB","bd_vallartamenu");
define("SUPER","4");
define("ADMIN","2");

$user = $_POST['user'];
$pass = $_POST['pass'];

/*
$hoy = date("G");
$hoy = $hoy - 1;
$hoy = $hoy.":".date("i");
$hoy = date("j-M-Y")." ".$hoy;
*/

$hoy = date("j-M-Y");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$sql = mysql_query("SELECT * FROM tb_login WHERE correo = '$user'");

if($f = mysql_fetch_array($sql)){
	if($pass == $f['password']){
		
		switch($f['tipo']){
			case SUPER:{
				$id = $f['id'];
				mysql_query("UPDATE tb_info_super SET ult_login = '$hoy' WHERE id_super = '$id'");
				break;
			}
			case ADMIN:{
				header("Location: lg_admin.php");
				break;
			}
			default:{}
		}
	}else{
		echo "Algo esta mal con la pass";
	}
}else{
	echo "Algo esta mal con la cuenta";
}
?>