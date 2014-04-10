<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASS","");
define("DB","vallartamenu");

mysql_connect(HOST,USER,PASS);
mysql_select_db(DB);

$nombrePropietario = $_POST['nombreP'];
$direccion = $_POST['dir'];
$telefono = $_POST['telef'];
$zona = $_POST['zon'];
$diaApertura = $_POST['diaA'];
$diaCierre = $_POST['diaC'];
$horaApertura = $_POST['horaA'];
$horaCierre = $_POST['horaC'];
$pagina = $_POST['pag'];
$tipoLugar = $_POST['tipoL'];
$tipoCocina = $_POST['tipoC'];
$descripcion = $_POST['descrip'];

session_start();
$id_admin = $_SESSION['id_admin'];

if(mysql_query("UPDATE tb_info_admin SET telefono = '$telefono',nombre_encargado = '$nombrePropietario',tipo_lugar = '$tipoLugar',tipo_cocina = '$tipoCocina',url = '$pagina',descripcion = '$descripcion',direccion = '$direccion', diaApertura = '$diaApertura', diaCierre = '$diaCierre', horaApertura = '$horaApertura', horaCierre = '$horaCierre', zona = '$zona' WHERE id = '$id_admin'")){
	echo "1";
}else{
	echo "0";
}
?>