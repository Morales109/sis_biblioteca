<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";

$smarty=new Smarty;


$db -> debug = false;
contarRegistros($db, "autores");

paginacion("autores.php?", $smarty);

$sql3= $db->Prepare("SELECT *
					FROM autores
					WHERE estado<>'0'
					AND id_autor >1
					ORDER BY id_autor DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("autores", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("autores.tpl");
?>