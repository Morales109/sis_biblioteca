<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$sql= $db->Prepare("SELECT *
					FROM usuarios u, personas p
					WHERE u.id_persona=p.id_persona
					AND u.estado <> '0'
					AND p.estado <> '0'
					ORDER BY u.id_usuario DESC");*/
$sql= $db->Prepare("SELECT *
					FROM usuarios u
					INNER JOIN personas p ON u.id_persona=p.id_persona
					WHERE u.estado <> '0'
					AND p.estado <> '0'
					ORDER BY u.id_usuario DESC");
$myfile = fopen("demo-sqli_KEYLAMORALES.txt", "w") or die("Unable to open file!");
fwrite($myfile, $sql);
fclose($myfile);

$rs= $db->GetAll($sql);

$smarty->assign("usuarios", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarios.tpl");
?>