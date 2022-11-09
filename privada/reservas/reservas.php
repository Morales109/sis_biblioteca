<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$sql= $db->Prepare("SELECT *
					FROM reservas r, usuarios1 u1
					WHERE r.id_usuario1=u1.id_usuario1
					AND r.estado <> '0'
					AND u1.estado <> '0'
					ORDER BY r.id_reserva DESC");*/
$sql= $db->Prepare("SELECT *
					FROM reservas r
					INNER JOIN usuarios1 u1 ON r.id_usuario1=u1.id_usuario1
					WHERE r.estado <> '0'
					AND u1.estado <> '0'
					ORDER BY r.id_reserva DESC");
$rs= $db->GetAll($sql);

$smarty->assign("reservas", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("reservas.tpl");
?>