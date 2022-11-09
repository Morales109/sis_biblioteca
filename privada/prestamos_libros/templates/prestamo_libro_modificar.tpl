<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_prestamo_libro.js"></script>
	<!---INICIO CALENDARIO
		<link rel="stylesheet" type="text/css" href="calendario/tcal.css">
		<script type="text/javascript" src="calendario/tcal.js"></script>
	FIN CALENDARIO----->
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="prestamo_libro_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR PRESTAMO LIBRO</h2>
		<b>Bibliotecario (*)</b>
			<select name="id_bibliotecario">
		<!--modificacion de bibliotecarios-->
		{foreach item=r from=$bibliotecarios}
		<option value={$r.id_bibliotecario}>{$r.apellido_bib}-{$r.nombre_bib}</option>
		{/foreach}

		{foreach item=r from=$bibliotecarios}
		<option value={$r.id_bibliotecario}>{$r.apellido_bib}-{$r.nombre_bib}</option>
		{/foreach}
	</select>
		<!--modificacion de prestamos_libros-->
	{foreach item=r from=$prestamo_libro}
	<p>
		<input type="text" name="fecha_inicial" size="35" placeholder="Fecha Inicial" value="{$r.fecha_inicial}" class="tcal">(*)
	</p>
	<p>
		<input type="text" name="fecha_final" size="25" placeholder="Fecha Final" value="{$r.fecha_final}" class="tcal">(*)
	</p>
	<p>
		<input type="text" name="fecha_entrega" size="11" placeholder="Fecha entrega" value="{$r.fecha_entrega}" class="tcal">(*)
	</p>
	<p>
		<input type="text" name="observacion_prestamo" size="40" placeholder="Observaciones" value="{$r.observacion_prestamo}">(*)
	</p>

	<p>
		<input type="hidden" name="accion" value="">
		<input type="hidden" name="id_prestamo_libro" value="{$r.id_prestamo_libro}">
		<input type="button" name="Aceptar" onclick="validar();"class="boton2">
		<input type="button" name="Cancelar" onclick="javascript:location.href='prestamos_libros.php';"class="boton2">


	</p>
	{/foreach}
	<p><b>(*) Campos Obligatorios</b></p>
</form>
</div>
</body>
</html>