<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_biblioteca=$_REQUEST["id_biblioteca"];
$nombre_biblioteca=$_POST["nombre_biblioteca"];
$ubicacion_biblioteca=$_POST["ubicacion_biblioteca"];
$telefono_biblioteca=$_POST["telefono_biblioteca"];
$correo_biblioteca=$_POST["correo_biblioteca"];
$logo_biblioteca1=$_POST["logo_biblioteca1"];
$nombre_log=$_FILES['logo_biblioteca']['name'];

$smarty=new Smarty;
if((!empty($_FILES['logo_biblioteca'])) and is_uploaded_file($_FILES['logo_biblioteca']['tmp_name'])){
	copy($_FILES['logo_biblioteca']['tmp_name'],'logos/'.$nombre_log);
	$logo_biblioteca=$_FILES['logo_biblioteca']['name'];

}elseif ($logo_biblioteca1 == "") {
	$logo_biblioteca= '';
	$nombre_log= '';
	// code...
}else
$nombre_log=$logo_biblioteca1;
$reg=array();
$reg["nombre_biblioteca"]=$nombre_biblioteca;
$reg["ubicacion_biblioteca"]=$ubicacion_biblioteca;
$reg["telefono_biblioteca"]=$telefono_biblioteca;
$reg["correo_biblioteca"]=$correo_biblioteca;
$reg["logo_biblioteca"]=$nombre_log;
$reg["usuarios"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("biblioteca", $reg, "UPDATE", "id_biblioteca='".$id_biblioteca."'");
if($rs1){
	$smarty->assign("mensaje","Los datos se modificaron ACTUALIZAR EL SISTEMA!!!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("biblioteca1.tpl");
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se modificaron!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("biblioteca1.tpl");
}
?>

