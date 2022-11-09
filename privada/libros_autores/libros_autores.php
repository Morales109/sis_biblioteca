<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$sql= $db->Prepare("SELECT *
					FROM libros_autores la, autores a
					WHERE la.id_autor=a.id_autor
					AND la.estado <> '0'
					AND a.estado <> '0'
					ORDER BY la.id_libro_autor DESC");*/
$sql= $db->Prepare("SELECT *
					FROM libros_autores la
					INNER JOIN autores a ON la.id_autor=a.id_autor
					AND la.estado <> '0'
					AND a.estado <> '0'
					ORDER BY la.id_libro_autor DESC");
$rs= $db->GetAll($sql);

$smarty->assign("libros_autores", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("libros_autores.tpl");
?>