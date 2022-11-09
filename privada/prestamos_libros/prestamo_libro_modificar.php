<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$id_bibliotecario=$_REQUEST["id_bibliotecario"];
$id_prestamo_libro=$_REQUEST["id_prestamo_libro"];


$smarty=new Smarty;

	$sql=$db->Prepare("SELECT*
					FROM prestamos_libros
					WHERE id_prestamo_libro=?
					");
	$rs=$db->GetAll($sql, array($id_prestamo_libro));
	$sql2=$db->Prepare("SELECT*
					FROM bibliotecarios
					WHERE id_bibliotecario=?
					AND estado<>'0'
					");
	$rs2=$db->GetAll($sql2, array($id_bibliotecario));
	$sql3=$db->Prepare("SELECT*
					FROM bibliotecarios
					WHERE id_bibliotecario<>?
					AND estado<>'0'
					");
	$rs3=$db->GetAll($sql3, array($id_bibliotecario));
	$smarty->assign("prestamo_libro",$rs);
	$smarty->assign("bibliotecario",$rs2);
	$smarty->assign("bibliotecarios",$rs3);
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("prestamo_libro_modificar.tpl");

?>