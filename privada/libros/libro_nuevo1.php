<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tipo_libro=$_POST["id_tipo_libro"];
$titulo=$_POST["titulo"];
$ubicacion=$_POST["ubicacion"];
$num_disponible=$_POST["num_disponible"];
$num_ejemplar=$_POST["num_ejemplar"];
$num_inventario=$_POST["num_inventario"];
$observacion=$_POST["observacion"];

$smarty=new Smarty;

	$reg=array();
	$reg["id_tipo_libro"]=$id_tipo_libro;
	$reg["titulo"]=$titulo;
	$reg["ubicacion"]=$ubicacion;
	$reg["num_disponible"]=$num_disponible;
	$reg["num_ejemplar"]=$num_ejemplar;
	$reg["num_inventario"]=$num_inventario;
	$reg["observacion"]=$observacion;
	$reg["fecha_inser"]=date("Y-m-d H:i:s");
	$reg["estado"]= 1;
	/*$reg["usuarios"]=$_SESSION["sesion_id_usuario"];*/
	$rs1=$db->AutoExecute("libros",$reg,"INSERT");
if($rs1){
	header("Location:libros.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se insertaron!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("libro_nuevo1.tpl");
}
?>