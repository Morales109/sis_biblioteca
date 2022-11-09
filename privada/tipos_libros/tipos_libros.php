<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";

$smarty=new Smarty;


$db -> debug = false;
contarRegistros($db, "tipos_libros");

paginacion("tipos_libros.php?", $smarty);

$sql3= $db->Prepare("SELECT *
					FROM tipos_libros
					WHERE estado<>'0'
					AND id_tipo_libro >1
					ORDER BY id_tipo_libro DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("tipos_libros", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_libros.tpl");
?>