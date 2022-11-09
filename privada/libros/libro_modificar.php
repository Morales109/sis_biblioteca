<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_libro=$_REQUEST["id_libro"];
$id_tipo_libro=$_REQUEST["id_tipo_libro"];


$smarty=new Smarty;

	$sql=$db->Prepare("SELECT*
					FROM libros
					WHERE id_libro=?
					");
	$rs=$db->GetAll($sql, array($id_libro));
	$sql2=$db->Prepare("SELECT*
					FROM tipos_libros
					WHERE id_tipo_libro=?
					AND estado<>'0'
					");
	$rs2=$db->GetAll($sql2, array($id_tipo_libro));
	$sql3=$db->Prepare("SELECT*
					FROM tipos_libros
					WHERE id_tipo_libro<>?
					AND estado<>'0'
					");
	$rs3=$db->GetAll($sql3, array($id_tipo_libro));
	$smarty->assign("libro",$rs);
	$smarty->assign("tipo_libro",$rs2);
	$smarty->assign("tipos_libros",$rs3);
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("libro_modificar.tpl");

?>