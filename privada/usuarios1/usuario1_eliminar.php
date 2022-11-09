<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$id_usuario1=$_REQUEST["id_usuario1"];
$db->debug=true;
$smarty=new Smarty;
$sql=$db->Prepare("SELECT *
					FROM prestamos_libros
					WHERE id_usuario1=?
					AND estado<> '0'
					");
$rs=$db->GetAll($sql, array($id_usuario1));

if(!$rs){
	$reg=array();
	$reg["estado"]= '0';
	$reg["id_usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("usuarios1",$reg, "UPDATE", "id_usuario1='".$id_usuario1."'");
	header("Location:usuarios1.php");
	exit();

}else{
	$smarty->assign("mensaje","ERROR: Los datos no se eliminaron!!!!!!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("usuario1_eliminar.tpl");

}
?>