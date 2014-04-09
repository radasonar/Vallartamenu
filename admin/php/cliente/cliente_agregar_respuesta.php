<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","bd_vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

session_start();
$id_admin = $_SESSION['id_admin'];

$idComentario = $_POST['idcom'];
$respuesta = $_POST['respu'];

if(@mysql_query("UPDATE tb_comentarios SET respuesta = '$respuesta' WHERE id = '$idComentario'")){
	echo "1";
}else{
	echo "0";
}
?>