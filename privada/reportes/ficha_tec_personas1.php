<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_persona =$_REQUEST["id_persona"];

$smarty= new Smarty;

	$sql = $db->Prepare("SELECT *
						FROM personas
						WHERE id_persona= ?
						AND estado <> '0'
						");
	$rs= $db->GetAll($sql, array($id_persona));
	$sql1=$db->Prepare("SELECT *
						FROM biblioteca
						WHERE id_biblioteca = 1
						AND estado <> '0'
						");
	$rs1 =$db->GetAll($sql1);
	
	$nombre_biblioteca=$rs1[0]["nombre_biblioteca"];
	$logo_biblioteca=$rs1[0]["logo_biblioteca"];
	$smarty->assign("logo_biblioteca", $logo_biblioteca);
	$smarty->assign("persona", $rs);
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("ficha_tec_personas1.tpl");
?>