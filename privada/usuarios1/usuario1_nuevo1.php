<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre=$_POST["nombre"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$celular=$_POST["celular"];
$ci_usuario=$_POST["ci_usuario"];
$correo_usuario=$_POST["correo_usuario"];

$reg=array();
$reg["id_biblioteca"]=1;

$reg["nombre"]=$nombre;
$reg["ap"]=$ap;
$reg["am"]=$am;
$reg["celular"]=$celular;
$reg["ci_usuario"]=$ci_usuario;
$reg["correo_usuario"]=$correo_usuario;

$reg["fecha_inser"]=date("Y-m-d H:i:s");
$reg["estado"]=1;
$reg["prestamos_libros"]=$_SESION["sesion_id_prestamo_libro"];
$rs1=$db->AutoExecute("prestamos_libros",$reg,"INSERT");

if($rs1){
	header("Location:personas.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("persona_nuevo1.tpl");
}
?>