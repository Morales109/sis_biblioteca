<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_reserva.js"></script>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="reserva_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR RESERVA DE LIBRO</h2>
		<b>Usuario Estudiante (*)</b>
			<select name="id_usuario1">
		<!--modificacion de usuarios1-->
		{foreach item=r from=$usuarios1}
		<option value={$r.id_usuario1}>{$r.nombre}-{$r.ap}-{$r.am}</option>
		{/foreach}

		{foreach item=r from=$usuarios1}
		<option value={$r.id_usuario1}>{$r.nombre}-{$r.ap}-{$r.am}</option>
		{/foreach}
	</select>
		<!--modificacion de reservas-->
	{foreach item=r from=$reserva}
	<p>
		<input type="text" name="fecha_reserva" size="35" placeholder="Fecha de Reserva" value="{$r.fecha_reserva}" >(*)
	</p>

	<p>
		<input type="text" name="observacion" size="40" placeholder="Observacion de Reserva" value="{$r.observacion}">(*)
	</p>

	<p>
		<input type="hidden" name="accion" value="">
		<input type="hidden" name="id_reserva" value="{$r.id_reserva}">
		<input type="button" name="Aceptar" onclick="validar();"class="boton2">
		<input type="button" name="Cancelar" onclick="javascript:location.href='reservas.php';"class="boton2">


	</p>
	{/foreach}
	<p><b>(*) Campos Obligatorios</b></p>
</form>
</div>
</body>
</html>