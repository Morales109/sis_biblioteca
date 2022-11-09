<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_persona=$_POST["id_persona"];
$usuario=$_POST["usuarios"];
$clave=$_POST["clave"];

$hash=password_hash($clave, PASSWORD_DEFAULT);
$smarty=new Smarty;

	$reg=array();
	$reg["id_persona"]=$id_persona;
	$reg["usuarios"]=$usuario;
	$reg["clave"]=$hash;
	$reg["fecha_inser"]=date("Y-m-d H:i:s");
	$reg["estado"]=1;
	$reg["usuarios"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("usuarios",$reg,"INSERT");
if($rs1){
	header("Location:usuarios.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se insertaron!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("usuario_nuevo1.tpl");
}
?>