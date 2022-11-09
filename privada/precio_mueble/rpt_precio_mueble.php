<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql= $db->Prepare("SELECT *
					FROM precios_muebles pm
					INNER JOIN muebles m ON pm.id_mueble=m.id_mueble
					ORDER BY pm.id_mueble DESC");
$rs= $db->GetAll($sql);


$sql2= $db->Prepare("SELECT *
					FROM muebles ");
$rs2= $db->GetAll($sql2);

$smarty->assign("muebles", $rs2);
$smarty->assign("precios_muebles", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_precio_mueble.tpl");
?>