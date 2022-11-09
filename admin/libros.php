<?php
$titulo=$_POST["titulo"];
$ubicacion=$_POST["ubicacion"];
$num_disponibles=$_POST["num_disponibles"];
$num_ejemplares=$_POST["num_ejemplares"];
$num_inventario=$_POST["num_inventario"];
$observacion=$_POST["observacion"];
$formulario=$_POST["formulario"];
 echo"<BR> Los valores introducidos de $formulario  son: </br>
 		TITULO:$titulo <br>
 		UBICACION:$ubicacion<br>
 		NUMERO DISPONIBLES:$num_disponibles<br>
 		NUMERO EJEMPLARES:$num_ejemplares <br>
 		NUMERO INVENTARIO:$num_inventario<br>
 		OBSERVACION:$observacion <br>
 		";


?>