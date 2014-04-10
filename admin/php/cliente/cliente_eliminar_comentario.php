<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$id = $_POST['id'];

if(@mysql_query("DELETE FROM tb_comentarios WHERE id = '$id'")){
	echo "1";
}else{
	echo "0";
}
?>