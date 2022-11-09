<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_tipo_libro.js"></script>

</head>
<body>
	<div class="formu_ingreso_datos">
	<form action="tipo_libro_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR TIPO DE LIBRO</h2>
		{foreach item=r from=$tipo_libro}
		<p>
			<input type="text" name="tipo_libro" size="15" placeholder="Tipo de libro" onkeyup="this.value=this.value.toUpperCase()" value="{$r.tipo_libro}">(*)
		</p>
		
		<p>
					<input type="hidden" name="accion" value="">
			<input type="hidden" name="id_tipo_libro" value="{$r.id_tipo_libro}">
			<input type="button" name="Aceptar" onclick="validar();"class="boton2">
			<input type="button" name="Cancelar" onclick="javascript:location.href='tipos_libros.php';"class="boton2">
		</p>
		{/foreach}
		<p><b>(*)Campos Obligatorios</b></p>
	</form>
	</div>
</body>
</html>