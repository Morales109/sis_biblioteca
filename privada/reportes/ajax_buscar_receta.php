<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

require_once("../../resaltarBusqueda.inc.php");
$smarty = new Smarty;


$receta = $_POST["receta"];
if ($receta=="T"){
	$receta="";
} else
$receta = strip_tags(stripslashes($_POST["receta"]));


$foto = strip_tags(stripslashes($_POST["foto"]));
$fecha_realizacion = strip_tags(stripslashes($_POST["fecha_realizacion"]));


//$db->debug=true;
if($receta or $foto or $fecha_realizacion){
	$sql3=$db->Prepare("SELECT *
						FROM recetas
						WHERE receta LIKE ?
						AND foto LIKE?
						AND fecha_realizacion LIKE?
						
						");
	$rs3=$db->GetAll($sql3, array($receta."%", $foto."%", $fecha_realizacion."%"));
	if($rs3){
		echo"<center>
			<table class='listado'>
			<tr>
				<th>Receta</th><th>Foto</th><th>Fecha Realizacion </th><th>Seleccione</th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["receta"];
			$str1=$fila["foto"];
			$str2=$fila["fecha_realizacion"];
			
		echo"<tr>
			<td align='center'>".resaltar($receta, $str)."</td>
			<td>".resaltar($foto, $str1)."</td>
			<td>".resaltar($fecha_realizacion, $str2)."</td>
			<td align='center'>
			<input type='radio' name='opcion' value='' onClick='buscar_receta(".$fila["id_receta"].")'>
			</td>
			</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>LA RECETA NO EXISTE!!</b></center><br>";


		}
	}

?>
