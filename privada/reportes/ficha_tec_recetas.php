<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty =new Smarty;
	$sql= $db->Prepare("SELECT *
					FROM recetas re
				
					
					");
	$rs= $db->GetAll($sql);

$smarty->assign("recetas", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ficha_tec_recetas.tpl");
?>