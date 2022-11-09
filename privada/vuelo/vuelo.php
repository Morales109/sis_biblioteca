<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$direc_css ="../css/colores.css";
$smarty = new Smarty;

$sql= $db->Prepare("SELECT *
					FROM vuelos vu
					INNER JOIN hoteles h ON vu.id_hotel=h.id_hotel
					ORDER BY vu.id_vuelo DESC");
$rs= $db->GetAll($sql);


$sql2= $db->Prepare("SELECT *
					FROM hoteles ");
$rs2= $db->GetAll($sql2);

$smarty->assign("vuelos", $rs);
$smarty->assign("hoteles", $rs2);
$smarty->assign("direc_css", $direc_css);
$smarty->display("vuelo.tpl");
?>