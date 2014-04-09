<?php
define("HOST","vallartame.ipagemysql.com");
define("USER","menu_root");
define("PASS","pr0methe0");
define("DB","vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$usuario = $_POST['user'];
$pass = $_POST['pass'];
$tipo = "2";

mysql_query("INSERT INTO tb_info_admin (correo, password, tipo_admin) VALUES('$usuario','$pass','$tipo')");
?>