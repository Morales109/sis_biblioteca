<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_libro.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="libro_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR LIBRO</h2>
		<b>Tipo libro (*)</b>
			<select name="id_tipo_libro">
		<!--modificacion de tipos_libros-->
		{foreach item=r from=$tipos_libros}
		<option value={$r.id_tipo_libro}>{$r.tipo_libro}</option>
		{/foreach}

		{foreach item=r from=$tipos_libros}
		<option value={$r.id_tipo_libro}>{$r.tipo_libro}</option>
		{/foreach}
	</select>
		<!--modificacion de libros-->
	{foreach item=r from=$libro}
	<p>
		<input type="text" name="titulo" size="35" placeholder="titulo" value="{$r.titulo}">(*)
	</p>
	<p>
		<input type="text" name="ubicacion" size="25" placeholder="ubicacion" value="{$r.ubicacion}">(*)
	</p>
	<p>
		<input type="text" name="num_disponible" size="11" placeholder="Nro disponible" value="{$r.num_disponible}">(*)
	</p>
	<p>
		<input type="text" name="num_ejemplar" size="11" placeholder="Nro ejemplar" value="{$r.num_ejemplar}">(*)
	</p>
	<p>
		<input type="text" name="num_inventario" size="10" placeholder="Nro inventario" value="{$r.num_inventario}">(*)
	</p>
	<p>
		<input type="hidden" name="accion" value="">
		<input type="hidden" name="id_libro" value="{$r.id_libro}">
		<input type="button" name="Aceptar" onclick="validar();"class="boton2">
		<input type="button" name="Cancelar" onclick="javascript:location.href='libros.php';"class="boton2">


	</p>
	{/foreach}
	<p><b>(*) Campos Obligatorios</b></p>
</form>
</div>
</body>
</html>