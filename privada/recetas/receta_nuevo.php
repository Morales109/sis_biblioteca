<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty= new Smarty;
$sql= $db->Prepare("SELECT*
					FROM chefs c 
					ORDER BY c.id_chef DESC 
					");
$rs =$db->GetAll($sql);
$smarty->assign("chefs",$rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("receta_nuevo.tpl");
?>