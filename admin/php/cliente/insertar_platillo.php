<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","bd_vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

session_start();

$id_admin = $_SESSION['id_admin'];
$id_menu = $_POST['id_menu'];
$titulo = $_POST['title'];
$precio = $_POST['price'];
$descripcion = $_POST['description'];

switch($id_menu){
	case 1:{
		if(mysql_query("INSERT INTO tb_entradas VALUES('','$titulo','$descripcion','$precio','$id_admin')")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	case 2:{
		if(mysql_query("INSERT INTO tb_platillos_fuertes VALUES('','$titulo','$descripcion','$precio','$id_admin')")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	case 3:{
		if(mysql_query("INSERT INTO tb_postres VALUES('','$titulo','$descripcion','$precio','$id_admin')")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	case 4:{
		if(mysql_query("INSERT INTO tb_bebidas VALUES('','$titulo','$descripcion','$precio','$id_admin')")){
			echo "1";
		}else{
			echo "0";
		}
		break;
	}
	default:{ break;}
}
?>