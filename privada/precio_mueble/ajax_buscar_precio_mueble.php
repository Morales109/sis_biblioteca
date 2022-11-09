<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");
$smarty = new Smarty;

$id_mueble=$_POST["id_mueble"];
$precio_venta = strip_tags(stripslashes($_POST["precio_venta"]));
$precio_compra = strip_tags(stripslashes($_POST["precio_compra"]));


$db->debug=true;
	if($id_mueble or $precio_venta or $precio_compra){
	$sql3=$db->Prepare("SELECT *
						FROM muebles mu
						INNER JOIN precios_muebles pm ON mu.id_mueble=pm.id_mueble
						WHERE pm.id_mueble = ?
						AND pm.precio_venta LIKE ?
						AND pm.precio_compra LIKE ?
						");
	$rs3=$db->GetAll($sql3, array($id_mueble."%", $precio_venta."%", $precio_compra."%"));
		if($rs3){
		echo"<center>
			<table class='listado'>
			<tr>
				<th>Mueble</th><th>Precio Venta</th><th>Precio Compra </th><th>Seleccione</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["nombres"];
			$str1=$fila["precio_venta"];
			$str2=$fila["precio_compra"];
			
			
			
		echo"<tr>
			<td align='center'>".resaltar($str, $str)." </td>
			<td>".resaltar($precio_venta, $str1)."</td>
			<td>".resaltar($precio_compra, $str2)."</td>
			<td align='center'>
			<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_mueble"].")'>
			</td>
			
			

		</tr>";
		}
		echo"</table>
		</center>";
	}else{
		echo"<center><b> EL MUEBLE NO EXISTE!!</b></center><br>";
	}

}



?>