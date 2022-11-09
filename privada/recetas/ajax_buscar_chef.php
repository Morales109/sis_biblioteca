<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");
$smarty = new Smarty;

$nombres= strip_tags(stripslashes($_POST["nombres"]));
$ap =strip_tags(stripslashes($_POST["ap"]));
$especialidad=strip_tags(stripslashes($_POST["especialidad"]));


if($nombres or $ap  or $especialidad){
	$sql3=$db->Prepare("SELECT *
						FROM chefs
						WHERE nombres LIKE ?
						AND ap LIKE?
						AND especialidad LIKE?
						
						
						");
	$rs3=$db->GetAll($sql3, array($nombres."%", $ap."%",  $especialidad."%"));
	if($rs3){
		echo"<center>
			<table width='60%' border='1'>
			<tr>
				<th>NOMBRES</th><th>AP</th><th>ESPECIALIDAD</th><th>Seleccione</th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["nombres"];
			$str1=$fila["ap"];
			
			$str2=$fila["especialidad"];
		echo"<tr>
			<td align='center'>".resaltar($nombres, $str)."</td>
			<td>".resaltar($ap, $str1)."</td>
			
			<td>".resaltar($especialidad, $str2)."</td>
			<td align='center'>

			<input type='radio' name='opcion' value='' onClick='buscar_chef(".$fila["id_chef"].")'>
			</td>
			</tr>";
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b> EL CHEF NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
			<tr>
				<td><b>NOMBRES</b></td>
				<td><input type='text' name='nombres1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>PATERNO</b></td>
			<td><input type='text' name='ap1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			
			<tr>
			<td><b>Especialidad</b></td>
			<td><input type='text' name='especialidad1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>

			</tr>
			
			
			
			<tr>
			<td align='center' colspan='2'>
			 <input type='button' value='ADICIONAR CHEF' onClick='insertar_chef()'>
			 </td>
			 </tr>
			 </table>
			 </center>
			 ";

		}
	}

?>
