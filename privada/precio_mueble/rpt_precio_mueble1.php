<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_mueble =$_REQUEST["id_mueble"];

$smarty= new Smarty;
//$db->debug=true;
	if($id_mueble =="T"){
	$sql1=$db->Prepare("SELECT *
						FROM muebles mu
						INNER JOIN precios_muebles pm ON mu.id_mueble=pm.id_mueble
						
						
						");
	$rs1 =$db->GetAll($sql1);
}else {
	$sql1=$db->Prepare("SELECT *
						FROM muebles mu
						INNER JOIN precios_muebles pm ON mu.id_mueble=pm.id_mueble
						WHERE mu.id_mueble= ?
						
						");
	$rs1 =$db->GetAll($sql1, array($id_mueble));
}
	

	$sql2= $db->Prepare("SELECT *
					FROM biblioteca
					WHERE id_biblioteca = 1
					AND estado<> '0'
					");
	$rs2=$db->GetAll($sql2);


$nombre_biblioteca=$rs2[0]["nombre_biblioteca"];
$logo_biblioteca=$rs2[0]["logo_biblioteca"];
$smarty->assign("logo_biblioteca", $logo_biblioteca);

$fecha=date("Y-m-d H:i:s");
$smarty->assign("precio_mueble1", $rs1);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_precio_mueble1.tpl");
?>