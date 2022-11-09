<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");
$smarty = new Smarty;

/*$nombres = strip_tags(stripslashes($_POST["nombres"]));*/

$id_chef=strip_tags(stripslashes($_POST["id_chef"]));
$receta = strip_tags(stripslashes($_POST["receta"]));
$foto = strip_tags(stripslashes($_POST["foto"]));


$db->debug=true;
	if($id_chef or $receta or $foto){
	$sql3=$db->Prepare("SELECT *
						FROM recetas re
						INNER JOIN chefs c ON re.id_chef=c.id_chef
						WHERE re.id_chef = ?
						AND re.receta LIKE?
						AND re.foto LIKE?
						");
	$rs3=$db->GetAll($sql3, array($id_chef."%", $receta."%", $foto."%"));
		if($rs3){
		echo"<center>
			<table class='listado'>
			<tr>
				<th>Chef</th><th>receta</th><th>foto</th>
			</th>";
		foreach($rs3 as $k =>$fila){
			$str =$fila["nombres"];
			/*$stra=$fila["ap"];*/
			$str1=$fila["receta"];
			$str2=$fila["foto"];
			
			
		/*echo"<tr>
			<td align='center'>".$str." ".$stra."</td>
			<td>".resaltar($receta, $str1)."</td>
			<td>".resaltar($foto, $str2)."</td>
		</tr>";*/
		echo"<tr>
			<td align='center'>".resaltar($str, $str)."</td>
			<td>".resaltar($receta, $str1)."</td>
			<td>".resaltar($foto, $str2)."</td>
			
			
			

		</tr>";
		}
		echo"</table>
		</center>";
	}else{
		echo"<center><b> LA RECETA NO EXISTE!!</b></center><br>";
	}

}



?>