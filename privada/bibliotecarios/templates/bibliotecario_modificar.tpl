<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_bibliotecario.js"></script>

</head>
<body>
	<div class="formu_ingreso_datos">
	<form action="bibliotecario_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR BIBLIOTECARIO</h2>
		{foreach item=r from=$bibliotecario}
		<input type="text" name="nombre_bib" size="25" placeholder="Nombre del Bibliotecario" value="{$r.nombre_bib}">(*)
		<p>
			<input type="text" name="apellido_bib" size="25" placeholder="Apellidos del Bibliotecario" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellido_bib}">(*)
		</p>
		<p>
			<input type="text" name="telefono_bib" size="10" placeholder="Telefono bibliotecario" onkeyup="this.value=this.value.toUpperCase()" value="{$r.telefono_bib}">(*)
		</p>
		<p>
			<input type="text" name="direccion_bib" size="30" placeholder="Direccion Bibliotecario" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion_bib}">(*)
		</p>
		<p>
			<input type="text" name="date_inicio"  placeholder="Fecha Inicio" onkeyup="this.value=this.value.toUpperCase()" value="{$r.date_inicio}">
		</p>
		<p>
			<input type="text" name="date_final"  placeholder="Fecha final" onkeyup="this.value=this.value.toUpperCase()" value="{$r.date_final}">
		</p>
		<p>
			<input type="hidden" name="accion" value="">
			<input type="hidden" name="id_bibliotecario" value="{$r.id_bibliotecario}">
			<input type="button" name="Aceptar" onclick="validar();"class="boton2">
			<input type="button" name="Cancelar" onclick="javascript:location.href='bibliotecarios.php';"class="boton2">
		</p>
		{/foreach}
		<p><b>(*)Campos Obligatorios</b></p>
	</form>
	</div>
</body>
</html>