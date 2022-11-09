<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_receta =$_REQUEST["id_receta"];


$smarty= new Smarty;

	$sql= $db->Prepare("SELECT *
					FROM recetas re
					INNER JOIN chefs ch ON re.id_chef=ch.id_chef
					WHERE  id_receta= ?
					
					");
	$rs= $db->GetAll($sql, array($id_receta));


	$sql1=$db->Prepare("SELECT *
						FROM biblioteca
						WHERE id_biblioteca = 1
						AND estado <> '0'
						");
	$rs1 =$db->GetAll($sql1);
	$nombre_biblioteca=$rs1[0]["nombre_biblioteca"];
	$logo_biblioteca=$rs1[0]["logo_biblioteca"];
	$smarty->assign("logo_biblioteca", $logo_biblioteca);
	$smarty->assign("receta", $rs);
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("ficha_tec_recetas1.tpl");
?>