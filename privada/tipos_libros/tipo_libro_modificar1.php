<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tipo_libro = $_REQUEST["id_tipo_libro"];
$tipo_libro = $_POST["tipo_libro"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["tipo_libro"] = $tipo_libro;
$rs1 = $db->AutoExecute("tipos_libros", $reg, "UPDATE", "id_tipo_libro='".$id_tipo_libro."'");

if($rs1) {
	header("Location: tipos_libros.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_tipo_libro", $id_tipo_libro);
	$smarty->display("id_tipo_libro_modificar1.tpl");
}
?>