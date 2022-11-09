<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre1=$_POST["nombre1"];
$codigo1=$_POST["codigo1"];
$ciudad1=$_POST["ciudad1"];

	$reg= array();
	
	$reg["nombre"]=$nombre1;
	$reg["codigo"]=$codigo1;
	$reg["ciudad"]=$ciudad1;
	

	
	
	$rs3=$db->AutoExecute("hoteles",$reg,"INSERT");
?>