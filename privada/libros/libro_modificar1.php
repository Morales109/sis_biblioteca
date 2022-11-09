<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
/*require_once("../libreria_menu.php");*/

/*datos de variables*/
$id_tipo_libro=$_REQUEST["id_tipo_libro"];
$id_libro=$_REQUEST["id_libro"];
$titulo=$_POST["titulo"];
$ubicacion=$_POST["ubicacion"];
$num_disponible=$_POST["num_disponible"];
$num_ejemplar=$_POST["num_ejemplar"];
$num_inventario=$_POST["num_inventario"];


/*almacenamiento de datos*/
$smarty=new Smarty;
$reg=array();
$reg["id_tipo_libro"]=$id_tipo_libro;
$reg["titulo"]=$titulo;
$reg["ubicacion"]=$ubicacion;
$reg["num_disponible"]=$num_disponible;
$reg["num_ejemplar"]=$num_ejemplar;
$reg["num_inventario"]=$num_inventario;

$reg["libros"]=$_SESION["session_id_libro"];

$rs1=$db->AutoExecute("libros",$reg,"UPDATE","id_libro='".$id_libro."'");

if($rs1){
	header("Location:libros.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR:Los datos no se modificaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_libro",$id_libro);
	$smarty->display("libro_modificar1.tpl");


}
?>
