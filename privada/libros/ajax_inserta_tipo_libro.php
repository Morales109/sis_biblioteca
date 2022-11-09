<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$tipo_libro1=$_POST["tipo_libro1"];

	$reg= array();
	$reg["id_biblioteca"]= 1;
	$reg["tipo_libro"]=$tipo_libro1;
	$reg["fecha_inser"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["libros"]=$_SESSION["sesion_id_libro"];
	$rs1=$db->AutoExecute("tipos_libros",$reg,"INSERT");
?>