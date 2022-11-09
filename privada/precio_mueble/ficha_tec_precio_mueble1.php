<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_mueble =$_REQUEST["id_mueble"];


$smarty= new Smarty;
	if($id_mueble =="T"){
	$sql= $db->Prepare("SELECT *
					FROM muebles mu
					INNER JOIN precios_muebles pm ON mu.id_mueble=pm.id_mueble
										
					");
	$rs= $db->GetAll($sql);
	}else {
	$sql=$db->Prepare("SELECT *
						FROM muebles mu
						INNER JOIN precios_muebles pm ON mu.id_mueble=pm.id_mueble
						WHERE mu.id_mueble= ?
						
						");
	$rs =$db->GetAll($sql, array($id_mueble));
}

	$sql1=$db->Prepare("SELECT *
						FROM biblioteca
						WHERE id_biblioteca = 1
						AND estado <> '0'
						");
	$rs1 =$db->GetAll($sql1);
	
	$sql2= $db->Prepare("SELECT *
					FROM muebles ");
	$rs2= $db->GetAll($sql2);

	$nombre_biblioteca=$rs1[0]["nombre_biblioteca"];
	$logo_biblioteca=$rs1[0]["logo_biblioteca"];
	$smarty->assign("logo_biblioteca", $logo_biblioteca);
	$smarty->assign("precio_mueble", $rs);
	$smarty->assign("muebles", $rs2);
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("ficha_tec_precio_mueble1.tpl");
?>