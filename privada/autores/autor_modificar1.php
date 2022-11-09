<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_autor = $_REQUEST["id_autor"];
$nombre_autor = $_POST["nombre_autor"];

$ape_paterno = $_POST["ape_paterno"];
$ape_materno = $_POST["ape_materno"];
$nacionalidad = $_POST["nacionalidad"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["nombre_autor"] = $nombre_autor;
$reg["ape_paterno"] = $ape_paterno;
$reg["ape_materno"] = $ape_materno;
$reg["nacionalidad"] = $nacionalidad;
$reg["id_libro_autor"] = $_SESSION["sesion_id_libro_autor"];
$rs1 = $db->AutoExecute("autores", $reg, "UPDATE", "id_autor='".$id_autor."'");

if($rs1) {
	header("Location: autores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_autor", $id_autor);
	$smarty->display("autor_modificar1.tpl");
}
?>