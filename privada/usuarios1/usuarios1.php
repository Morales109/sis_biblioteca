<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";

$smarty=new Smarty;


$db -> debug = false;
contarRegistros($db, "usuarios1");

paginacion("usuarios1.php?", $smarty);

$sql3= $db->Prepare("SELECT *
					FROM usuarios1
					WHERE estado<>'0'
					AND id_usuario1 >1
					ORDER BY id_usuario1 DESC
					LIMIT ? OFFSET ?
					");
$smarty->assign("usuarios1", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarios1.tpl");
?>


