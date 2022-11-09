<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$tipo_libro=$_POST["tipo_libro"];

$reg=array();
$reg["id_biblioteca"]=1;
$reg["tipo_libro"]=$tipo_libro;
$reg["fecha_inser"]=date("Y-m-d H:i:s");
$reg["estado"]=1;
$rs1=$db->AutoExecute("tipos_libros",$reg,"INSERT");

if($rs1){
	header("Location:tipos_libros.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("tipo_libro_nuevo1.tpl");
}
?>