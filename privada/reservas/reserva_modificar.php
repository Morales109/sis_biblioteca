<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$id_usuario1=$_REQUEST["id_usuario1"];
$id_reserva=$_REQUEST["id_reserva"];


$smarty=new Smarty;

	$sql=$db->Prepare("SELECT*
					FROM reservas
					WHERE id_reserva=?
					");
	$rs=$db->GetAll($sql, array($id_reserva));
	$sql2=$db->Prepare("SELECT*
					FROM usuarios1
					WHERE id_usuario1=?
					AND estado<>'0'
					");
	$rs2=$db->GetAll($sql2, array($id_usuario1));
	$sql3=$db->Prepare("SELECT*
					FROM usuarios1
					WHERE id_usuario1<>?
					AND estado<>'0'
					");
	$rs3=$db->GetAll($sql3, array($id_usuario1));
	$smarty->assign("reserva",$rs);
	$smarty->assign("usuario1",$rs2);
	$smarty->assign("usuarios1",$rs3);
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("reserva_modificar.tpl");

?>