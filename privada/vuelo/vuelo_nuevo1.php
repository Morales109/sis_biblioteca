<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_hotel=$_POST["id_hotel"];

$origen=$_POST["origen"];
$destino=$_POST["destino"];
$fecha=$_POST["fecha"];
$horas=$_POST["horas"];
$smarty=new Smarty;

	$reg=array();
	$reg["id_hotel"]=$id_hotel;
	
	$reg["origen"]=$origen;
	$reg["destino"]=$destino;
	$reg["fecha"]=$fecha;
	$reg["horas"]=$horas;
	$rs1=$db->AutoExecute("vuelos",$reg,"INSERT");
if($rs1){
	header("Location:vuelo.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se insertaron!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("vuelo_nuevo1.tpl");
}
?>