<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_autor = $_REQUEST["id_autor"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM autores
	                 WHERE id_autor = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_autor));
$smarty->assign("autor", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("autor_modificar.tpl");
?>