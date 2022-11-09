<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*require_once("../libreria_menu.php");*/

/*datos de variables*/
$id_usuario1=$_REQUEST["id_usuario1"];
$id_reserva=$_REQUEST["id_reserva"];
$fecha_reserva=$_POST["fecha_reserva"];
$observacion=$_POST["observacion"];

/*almacenamiento de datos*/
$smarty=new Smarty;
$reg=array();
$reg["id_usuario1"]=$id_usuario1;
$reg["fecha_reserva"]=$fecha_reserva;
$reg["observacion"]=$observacion;


$reg["reservas"]=$_SESION["session_id_reservas"];

$rs1=$db->AutoExecute("reservas",$reg,"UPDATE","id_reserva='".$id_reserva."'");

if($rs1){
	header("Location:reservas.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se modificaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_reserva",$id_reserva);
	$smarty->display("reserva_modificar1.tpl");


}
?>
