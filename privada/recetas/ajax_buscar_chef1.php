<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_chef =$_POST["id_chef"];


$sql3=$db->Prepare("SELECT *
					FROM chefs
					WHERE id_chef =?
					
					");
$rs3= $db->GetAll($sql3, array($id_chef));

echo "<center>
	<table width='60%' border='1'>
		<tr>
			<th colspan='4'>Datos Chef</th>
		</tr>
	";
foreach ($rs3 as $k => $fila) {
	# code...
	echo"<tr>
		<td align='center'>".$fila["nombres"]."</td>
		<td>".$fila["ap"]."</td>
		<td>".$fila["especialidad"]."</td>
		</tr>";
	}
	echo"</table>
		</center>";
?>