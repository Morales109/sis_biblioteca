<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_tipo_libro = $_REQUEST["id_tipo_libro"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
	                 FROM tipos_libros
	                 WHERE id_tipo_libro = ? 
	                 ");
$rs = $db->GetAll($sql, array($id_tipo_libro));
$smarty->assign("persona", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("tipo_libro_modificar.tpl");
?>