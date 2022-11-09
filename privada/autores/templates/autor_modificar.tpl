<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_autor.js"></script>

</head>
<body>
	<div class="formu_ingreso_datos">
	<form action="autor_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR AUTOR</h2>
		{foreach item=r from=$autor}
		<input type="text" name="nombre_autor" size="25" placeholder="Nombre Autor" value="{$r.nombre_autor}">(*)
		<p>
			<input type="text" name="ape_paterno" size="25" placeholder="Apellido paterno" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ape_paterno}">(*)
		</p>
		<p>
			<input type="text" name="ape_materno" size="25" placeholder="Apellido materno" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ape_materno}">(*)
		</p>
		<p>
			<input type="text" name="nacionalidad" size="10" placeholder="Nacionalidad" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nacionalidad}">(*)
		</p>
		
		<p>
			<input type="hidden" name="accion" value="">
			<input type="hidden" name="id_autor" value="{$r.id_autor}">
			<input type="button" name="Aceptar" onclick="validar();"class="boton2">
			<input type="button" name="Cancelar" onclick="javascript:location.href='autores.php';"class="boton2">
		</p>
		{/foreach}
		<p><b>(*)Campos Obligatorios</b></p>
	</form>
	</div>
</body>
</html>