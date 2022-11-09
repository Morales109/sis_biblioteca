<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$ap= strip_tags(stripslashes($_POST["ap"]));
$nombre =strip_tags(stripslashes($_POST["nombre"]));
$celular =strip_tags(stripcslashes($_POST["celular"]));
$correo_usuario=strip_tags(stripcslashes($_POST["correo_usuario"]));

//$db->debug=true;
if($ap or $nombre or $celular or $correo_usuario){
	$sql3=$db->Prepare("SELECT *
						FROM usuarios1
						WHERE ap LIKE ?
						AND nombre LIKE?
						AND celular LIKE?
						AND correo_usuario LIKE?
						AND estado <> 0
						");
	$rs3=$db->GetAll($sql3, array($ap."%", $nombre."%", $celular."%", $correo_usuario."%"));
	if($rs3){
		echo"<center>
			<table class='listado'>
			<tr>
				<th>C.I.</th><th>ap</th><th>am</th><th>NOMBRES</th><th><img src='../../imagenes/modificar2.png'></th><th><img src='../../imagenes/eliminar2.jpg'></th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["ap"];
			$str1=$fila["nombre"];
			$str2=$fila["celular"];
			$str3=$fila["correo_usuario"];
		echo"<tr>
			<td align='center'>".resaltar($ap, $str)."</td>
			<td>".resaltar($nombre, $str1)."</td>
			<td>".resaltar($celular, $str2)."</td>
			<td>".resaltar($correo_usuario, $str3)."</td>
			<td align='center'>
			<form name='formModif".$fila["id_usuario1"]."'method='post' action='persona_modificar.php'>
			<input type='hidden' name='id_usuario1' value='".$fila['id_usuario1']."'>
			<a href='javascript:document.formModif".$fila['id_usuario1'].".submit();' title='Modificar Persona Sistema'>
			Modificar>>
			</a>
			</form>
			</td>
			<td align='center'>
			<form name='formElimi".$fila["id_usuario1"]."' method='post' action='persona_eliminar.php'>
			<input type='hidden' name='id_usuario1' value='".$fila["id_usuario1"]."'>
			<a href='javascript:document.formElimi".$fila['id_usuario1'].".submit();' title='Eliminar Persona Sistema' onclick='javascript:return(confirm(\"Desea realmente Eliminar a  la Usuario_estudiante ..?\"))';
			location.href='usuario1_eliminar.php''>
			Eliminar>>
			</a>
			</form>
		</td>
		</tr>";
		}
		echo"</table>
		</center>";
	}else{
		echo"<center><b> LA PERSONA NO EXISTE!!</b></center><br>";
	}
}
?>