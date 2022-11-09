<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*require_once("../libreria_menu.php");*/

/*datos de variables*/
$id_bibliotecario=$_REQUEST["id_bibliotecario"];
$id_prestamo_libro=$_REQUEST["id_prestamo_libro"];
$fecha_incial=$_POST["fecha_inicial"];
$fecha_final=$_POST["fecha_final"];
$fecha_entrega=$_POST["fecha_entrega"];
$observacion_prestamo=$_POST["observacion_prestamo"];



/*almacenamiento de datos*/
$smarty=new Smarty;
$reg=array();
$reg["id_bibliotecario"]=$id_bibliotecario;
$reg["fecha_incial"]=$fecha_incial;
$reg["fecha_final"]=$fecha_final;
$reg["fecha_entrega"]=$fecha_entrega;
$reg["observacion_prestamo"]=$observacion_prestamo;


$reg["prestamos_libros"]=$_SESION["session_id_prestamo_libro"];

$rs1=$db->AutoExecute("prestamos_libros",$reg,"UPDATE","id_prestamo_libro='".$id_prestamo_libro."'");

if($rs1){
	header("Location:prestamos_libros.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se modificaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_prestamo_libro",$id_prestamo_libro);
	$smarty->display("prestamo_libro_modificar1.tpl");


}
?>
