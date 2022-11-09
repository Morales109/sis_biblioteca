<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty= new Smarty;
$sql= $db->Prepare("SELECT*
					FROM tipos_libros tl 
					WHERE tl.estado<> 0
					ORDER BY tl.id_tipo_libro DESC 
					");
$rs =$db->GetAll($sql);
$smarty->assign("tipos_libros",$rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("libro_nuevo.tpl");
?>
