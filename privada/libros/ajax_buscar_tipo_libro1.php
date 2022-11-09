<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_tipo_libro =$_POST["id_tipo_libro"];

$sql3=$db->Prepare("SELECT *
					FROM tipos_libros
					WHERE id_tipo_libro =?
					AND estado <> 0
					");
$rs3= $db->GetAll($sql3, array($id_tipo_libro));

echo "<center>
	<table width='60%' border='1'>
		<tr>
			<th colspan='4'>Datos Tipo Libro</th>
		</tr>
	";
foreach ($rs3 as $k => $fila) {
	# code...
	echo"<tr>
		<td align='center'>".$fila["tipo_libro"]."</td>
		</tr>";
	}
	echo"</table>
		</center>";
?>