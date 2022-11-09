<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_libro =$_REQUEST["id_libro"];


$smarty= new Smarty;
/*$db->debug =true;*/

	/*$sql = $db->Prepare("SELECT *
						FROM libros
						WHERE id_libro= ?
						AND estado <> '0'
						");
	$rs= $db->GetAll($sql, array($id_libro));*/
	$sql= $db->Prepare("SELECT *
					FROM libros li
					INNER JOIN tipos_libros tp ON li.id_tipo_libro=tp.id_tipo_libro
					WHERE  id_libro= ?
					AND li.estado <> '0'
					AND tp.estado <> '0'
					");
	$rs= $db->GetAll($sql, array($id_libro));


	$sql1=$db->Prepare("SELECT *
						FROM biblioteca
						WHERE id_biblioteca = 1
						AND estado <> '0'
						");
	$rs1 =$db->GetAll($sql1);
	$nombre_biblioteca=$rs1[0]["nombre_biblioteca"];
	$logo_biblioteca=$rs1[0]["logo_biblioteca"];
	$smarty->assign("logo_biblioteca", $logo_biblioteca);
	$smarty->assign("libro", $rs);
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("ficha_tec_libros1.tpl");
?>