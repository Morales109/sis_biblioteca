<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$sql= $db->Prepare("SELECT *
					FROM prestamos_libros pl, bibliotecarios bi
					WHERE pl.id_bibliotecario=bi.id_bibliotecario
					AND pl.estado <> '0'
					AND bi.estado <> '0'
					ORDER BY pl.id_prestamo_libro DESC");*/
$sql= $db->Prepare("SELECT *
					FROM prestamos_libros pl
					INNER JOIN bibliotecarios bi ON pl.id_bibliotecario=bi.id_bibliotecario
					WHERE pl.estado <> '0'
					AND bi.estado <> '0'
					ORDER BY pl.id_prestamo_libro DESC");
$rs= $db->GetAll($sql);

$smarty->assign("prestamos_libros", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("prestamos_libros.tpl");
?>