<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_bibliotecario = $_REQUEST["id_bibliotecario"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM bibliotecarios 
	                 WHERE id_bibliotecario = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_bibliotecario));
$smarty->assign("bibliotecario", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("bibliotecario_modificar.tpl");
?>
