<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty= new Smarty;
$sql= $db->Prepare("SELECT*
					FROM hoteles h 
					ORDER BY h.id_hotel DESC 
					");
$rs =$db->GetAll($sql);
$smarty->assign("hoteles",$rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("vuelo_nuevo.tpl");
?>