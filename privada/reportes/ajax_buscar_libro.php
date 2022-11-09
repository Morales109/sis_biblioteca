<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");
require_once("../../resaltarBusqueda.inc.php");
$smarty = new Smarty;

$titulo = strip_tags(stripslashes($_POST["titulo"]));
$ubicacion = strip_tags(stripslashes($_POST["ubicacion"]));
$num_inventario = strip_tags(stripslashes($_POST["num_inventario"]));

//$db->debug=true;
if($titulo or $ubicacion or $num_inventario){
	$sql3=$db->Prepare("SELECT *
						FROM libros
						WHERE titulo LIKE ?
						AND ubicacion LIKE?
						AND num_inventario LIKE?
						AND estado <> 0
						");
	$rs3=$db->GetAll($sql3, array($titulo."%", $ubicacion."%", $num_inventario."%"));
	if($rs3){
		echo"<center>
			<table class='listado'>
			<tr>
				<th>Titulo</th><th>Ubicacion</th><th>Nº Inventario</th><th>Seleccione</th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["titulo"];
			$str1=$fila["ubicacion"];
			$str2=$fila["num_inventario"];
			
		echo"<tr>
			<td align='center'>".resaltar($titulo, $str)."</td>
			<td>".resaltar($ubicacion, $str1)."</td>
			<td>".resaltar($num_inventario, $str2)."</td>
			<td align='center'>
			<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_libro"].")'>
			</td>
			</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b> EL LIBRO NO EXISTE!!</b></center><br>";
		/*
		echo"<center>
			<table class='listado'>
			<tr>
				<td><b>Titulo</b></td>
				<td><input type='text' name='titulo1' size='20'></td>
			</tr>
			<tr>
			<td><b>Ubicacion</b></td>
			<td><input type='text' name='ubicacion1' size='20' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			<tr>
			<td><b>Nº Disponible</b></td>
			<td><input type='text' name='num_disponible1' size='10'></td>
			</tr>
			<tr>
			<td><b>Nº Ejemplar</b></td>
			<td><input type='text' name='num_ejemplar1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			<tr>
			<td><b>Nº Inventario</b></td>
			<td><input type='text' name='num_inventario1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			<tr>
			<td><b>Observacion</b></td>
			<td><input type='text' name='observacion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
						
			
			<tr>
			<td align='center' colspan='2'>
			 <input type='button' value='ADICIONAR LIBRO' onClick='insertar_libro()'>
			 </td>
			 </tr>
			 </table>
			 </center>
			 ";*/

		}
	}

?>
