<?php
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$date_inicio=$_POST["date_inicio"];
$date_final=$_POST["date_final"];
$formulario=$_POST["formulario"];


echo "Los valores introducidos en $formulario son:<br>
		NOMBRES:$nombres <br>
		APELLIDOS:$apellidos <br>
		TELEFONO:$telefono <br>
		DIRECCION:$direccion <br>
		FECHA INICIO:$date_inicio <br>
		FECHA FINAL:$date_final <br>


";

?>