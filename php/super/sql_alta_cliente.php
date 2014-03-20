<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","bd_vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$usuario = $_POST['user'];
$pass = $_POST['pass'];
$tipo = "2";

mysql_query("INSERT INTO tb_info_admin (correo, password, tipo_admin) VALUES('$usuario','$pass','$tipo')");
?>