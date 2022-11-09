<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$tipo_libro= strip_tags(stripslashes($_POST["tipo_libro"]));

if($tipo_libro){
	$sql3=$db->Prepare("SELECT *
						FROM tipos_libros
						WHERE tipo_libro LIKE ?
						AND estado <> 0
						");
	$rs3=$db->GetAll($sql3, array($tipo_libro."%"));
	if($rs3){
		echo"<center>
			<table width='60%' border='1'>
			<tr>
				<th>TIPO DE LIBRO</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["tipo_libro"];
			
		echo"<tr>
			<td align='center'>".resaltar($tipo_libro, $str)."</td>
			<td align='center'>

			<input type='radio' name='opcion' value='' onClick='buscar_tipo_libro(".$fila["id_tipo_libro"].")'>
			</td>
			</tr>";
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b> EL TIPO DE LIBRO NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
			<tr>
				<td><b>CI</b></td>
				<td><input type='text' name='tipo_libro1' size='10'></td>
			</tr>
			
			
			<tr>
			<td align='center' colspan='2'>
			 <input type='button' value='ADICIONAR TIPO LIBRO' onClick='insertar_tipo_libro()'>
			 </td>
			 </tr>
			 </table>
			 </center>
			 ";

		}
	}

?>
