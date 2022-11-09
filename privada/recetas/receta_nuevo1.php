<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_chef=$_POST["id_chef"];
$receta=$_POST["receta"];
$foto=$_POST["foto"];
$fecha_realizacion=$_POST["fecha_realizacion"];
$smarty=new Smarty;

	$reg=array();
	$reg["id_chef"]=$id_chef;
	$reg["receta"]=$receta;
	$reg["foto"]=$foto;
	$reg["fecha_realizacion"]=$fecha_realizacion;
	$rs1=$db->AutoExecute("recetas",$reg,"INSERT");
if($rs1){
	header("Location:recetas.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se insertaron!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("receta_nuevo1.tpl");
}
?>