<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$direc_css ="../css/colores.css";
$smarty = new Smarty;

$sql= $db->Prepare("SELECT *
					FROM recetas re
					INNER JOIN chefs c ON re.id_chef=c.id_chef
					ORDER BY re.id_receta DESC");
$rs= $db->GetAll($sql);


$sql2= $db->Prepare("SELECT *
					FROM chefs ");
$rs2= $db->GetAll($sql2);

$smarty->assign("recetas", $rs);
$smarty->assign("chefs", $rs2);
$smarty->assign("direc_css", $direc_css);
$smarty->display("ajax_buscar_recetas.tpl");
?>