<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_usuario1 = $_REQUEST["id_usuario1"];
$nombre = $_POST["nombre"];

$ap = $_POST["ap"];
$am = $_POST["am"];
$celular = $_POST["celular"];
$ci_usuario = $_POST["ci_usuario"];
$correo_usuario = $_POST["correo_usuario"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["nombre"] = $nombre;
$reg["ap"] = $ap;
$reg["am"] = $am;
$reg["celular"] = $celular;
$reg["ci_usuario"] = $ci_usuario;
$reg["correo_usuario"] = $correo_usuario;
$reg["usuario10"] = $_SESSION["sesion_id_usuario1"];
$rs1 = $db->AutoExecute("usuarios1", $reg, "UPDATE", "id_usuario1='".$id_usuario1."'");

if($rs1) {
	header("Location: usuarios1.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_usuario1", $id_usuario1);
	$smarty->display("usuario1_modificar1.tpl");
}
?>