<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
$direc_css ="../css/colores.css";
$smarty = new Smarty;

/*$sql= $db->Prepare("SELECT *
					FROM libros li, tipos_libros tp
					WHERE li.id_tipo_libro=tp.id_tipo_libro
					AND li.estado <> '0'
					AND tp.estado <> '0'
					ORDER BY li.id_libro DESC");*/

$sql= $db->Prepare("SELECT *
					FROM libros li
					INNER JOIN tipos_libros tp ON li.id_tipo_libro=tp.id_tipo_libro
					WHERE li.estado <> '0'
					AND tp.estado <> '0'
					ORDER BY li.id_libro DESC");
$rs= $db->GetAll($sql);

$smarty->assign("libros", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("libros.tpl");
?>