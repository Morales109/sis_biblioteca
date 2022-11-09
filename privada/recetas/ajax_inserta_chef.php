<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombres1=$_POST["nombres1"];
$ap1=$_POST["ap1"];
$especialidad1=$_POST["especialidad1"];



	$reg= array();
	/*$reg["id_chef"]= 1;*/
	$reg["nombres"]=$nombres1;
	$reg["ap"]=$ap1;
	
	$reg["especialidad"]=$especialidad1;
	
	$reg["fecha_nacimiento"]= date("Y-m-d H:i:s");
	$rs3=$db->AutoExecute("chefs",$reg,"INSERT");
?>