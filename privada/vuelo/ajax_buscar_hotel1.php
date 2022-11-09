<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_hotel =$_POST["id_hotel"];


$sql3=$db->Prepare("SELECT *
					FROM hoteles
					WHERE id_hotel =?
					
					");
$rs3= $db->GetAll($sql3, array($id_hotel));

echo "<center>
	<table width='60%' border='1'>
		<tr>
			<th colspan='4'>Datos Hotel</th>
		</tr>
	";
foreach ($rs3 as $k => $fila) {
	# code...
	echo"<tr>
		<td align='center'>".$fila["nombre"]."</td>
		<td>".$fila["codigo"]."</td>
		
		<td>".$fila["ciudad"]."</td>
		
		</tr>";
	}
	echo"</table>
		</center>";
?>