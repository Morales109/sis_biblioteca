<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_usuario1 = $_REQUEST["id_usuario1"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM usuarios1 
	                 WHERE id_usuario1 = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_usuario1));
$smarty->assign("usuario1", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("usuario1_modificar.tpl");
?>
