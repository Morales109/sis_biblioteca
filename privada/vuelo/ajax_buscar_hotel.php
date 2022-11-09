<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre= strip_tags(stripslashes($_POST["nombre"]));
$codigo =strip_tags(stripslashes($_POST["codigo"]));
$ciudad=strip_tags(stripslashes($_POST["ciudad"]));


if($nombre or $codigo  or $ciudad ){
	$sql3=$db->Prepare("SELECT *
						FROM hoteles
						WHERE nombre LIKE ?
						AND codigo LIKE ?
						AND ciudad LIKE ?
						
						
						
						");
	$rs3=$db->GetAll($sql3, array($nombre."%", $codigo."%",  $ciudad."%"));
	if($rs3){
		echo"<center>
			<table width='60%' border='1'>
			<tr>
				<th>NOMBRE</th><th>CODIGO</th><th>CIUDAD</th><th>Seleccione</th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["nombre"];
			$str1=$fila["codigo"];
			
			
			$str2=$fila["ciudad"];
			
		echo"<tr>
			<td align='center'>".resaltar($nombre, $str)."</td>
			<td>".resaltar($codigo, $str1)."</td>
			
			
			<td>".resaltar($ciudad, $str2)."</td>
			
			
			<td align='center'>

			<input type='radio' name='opcion' value='' onClick='buscar_hotel(".$fila["id_hotel"].")'>
			</td>
			</tr>";
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b> EL HOTEL NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
			<tr>
				<td><b>NOMBRE</b></td>
				<td><input type='text' name='nombre1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>CODIGO</b></td>
			<td><input type='text' name='codigo1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			
			<tr>
			<td><b>CIUDAD</b></td>
			<td><input type='text' name='ciudad1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			
			
			
			<tr>
			<td align='center' colspan='2'>
			 <input type='button' value='ADICIONAR HOTEL' onClick='insertar_hotel()'>
			 </td>
			 </tr>
			 </table>
			 </center>
			 ";

		}
	}

?>
