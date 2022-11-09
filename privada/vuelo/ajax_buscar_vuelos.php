<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");
$smarty = new Smarty;

$id_hotel=$_POST["id_hotel"];
$origen = strip_tags(stripslashes($_POST["origen"]));
$destino = strip_tags(stripslashes($_POST["destino"]));
$fecha = strip_tags(stripslashes($_POST["fecha"]));

$db->debug=true;
	if($id_hotel or $origen or $destino or $fecha){
	$sql3=$db->Prepare("SELECT *
						FROM vuelos vu
						INNER JOIN hoteles h ON vu.id_hotel=h.id_hotel
						WHERE h.id_hotel = ?
						AND vu.origen LIKE ?
						AND vu.destino LIKE ?
						AND vu.fecha LIKE ?
						");
	$rs3=$db->GetAll($sql3, array($id_hotel."%", $origen."%", $destino."%", $fecha."%"));
		if($rs3){
		echo"<center>
			<table class='listado'>
			<tr>
				<th>Hotel</th><th>Origen</th><th>Destino</th><th>Fecha</th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["nombre"];
			$str1=$fila["origen"];
			$str2=$fila["destino"];
			$str3=$fila["fecha"];
			
			
		echo"<tr>
			<td align='center'>".resaltar($str, $str)."</td>
			<td>".resaltar($origen, $str1)."</td>
			<td>".resaltar($destino, $str2)."</td>
			<td>".resaltar($fecha, $str3)."</td>
			
			

		</tr>";
		}
		echo"</table>
		</center>";
	}else{
		echo"<center><b> EL VUELO NO EXISTE!!</b></center><br>";
	}

}



?>