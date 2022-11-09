<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$ubicacion =$_REQUEST["ubicacion"];

$smarty= new Smarty;

if($ubicacion =="T"){
	$sql = $db->Prepare("SELECT *
						FROM libros
						WHERE estado <> '0'
						");
	$rs= $db->GetAll($sql);
}else{
	$sql=$db->Prepare("SELECT *
						FROM libros
						WHERE ubicacion =?
						AND estado <> '0'
						");
	$rs =$db->GetAll($sql, array($ubicacion));
}

$sql1= $db->Prepare("SELECT *
					FROM biblioteca
					WHERE id_biblioteca
					AND estado<> '0'
					");
$rs1=$db->GetAll($sql1);
$nombre_biblioteca=$rs1[0]["nombre_biblioteca"];
$logo_biblioteca=$rs1[0]["logo_biblioteca"];
$smarty->assign("logo_biblioteca", $logo_biblioteca);

$fecha=date("Y-m-d H:i:s");
$smarty->assign("libros_ubicacion1", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_libros_ubicacion1.tpl");
?>