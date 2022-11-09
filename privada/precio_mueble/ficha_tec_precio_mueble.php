<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty =new Smarty;

$sql= $db->Prepare("SELECT *
					FROM muebles mu
					INNER JOIN precios_muebles pm ON mu.id_mueble=pm.id_mueble
					
					ORDER BY pm.id_mueble DESC");
$rs= $db->GetAll($sql);


$sql2= $db->Prepare("SELECT *
					FROM muebles ");
$rs2= $db->GetAll($sql2);

$smarty->assign("precio_mueble1", $rs);
$smarty->assign("muebles", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_precio_mueble.tpl");
?>