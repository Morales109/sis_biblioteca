<?php
$nombre_biblioteca=$_POST["nombre_biblioteca"];
$ubicacion_biblioteca=$_POST["ubicacion_biblioteca"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$formulario=$_POST["formulario"];
 echo"<BR> Los valores introducidos de $formulario  son: </br>
 		NOMBRE:$nombre_biblioteca <br>
 		UBICACION:$ubicacion_biblioteca <br>
 		TELEFONO:$telefono <br>
 		CORREO:$correo <br>
 		";
?>