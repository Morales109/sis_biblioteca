<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_bibliotecario = $_REQUEST["id_bibliotecario"];
$nombre_bib = $_POST["nombre_bib"];

$apellido_bib = $_POST["apellido_bib"];
$telefono_bib = $_POST["telefono_bib"];
$direccion_bib = $_POST["direccion_bib"];
$date_inicio = $_POST["date_inicio"];
$date_final = $_POST["date_final"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["nombre_bib"] = $nombre_bib;
$reg["apellido_bib"] = $apellido_bib;
$reg["telefono_bib"] = $telefono_bib;
$reg["direccion_bib"] = $direccion_bib;
$reg["date_inicio"] = $date_inicio;
$reg["date_final"] = $date_final;
$reg["observacion_prestamo"] = $_SESSION["sesion_id_prestamo_libro"];
$rs1 = $db->AutoExecute("bibliotecarios", $reg, "UPDATE", "id_bibliotecario='".$id_bibliotecario."'");

if($rs1) {
	header("Location: bibliotecarios.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_bibliotecario", $id_bibliotecario);
	$smarty->display("bibliotecario_modificar1.tpl");
}
?>