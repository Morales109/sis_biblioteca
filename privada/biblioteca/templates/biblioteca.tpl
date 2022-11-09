<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="../biblioteca/js/validar_biblioteca.js"></script>	

</head>
<body>
<br>
	<center>
		<h1>BIBLIOTECA</h1>
		<form action="biblioteca1.php" method="post" name="formu" enctype="multipart/form-data">
			<table border="1">
				{foreach item=r from=$biblioteca}
				<tr>
					<th>Nombre(*)</th><th>:</th>
					<td><input type="text" name="nombre_biblioteca" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre_biblioteca}"></td>
				</tr>
				<tr>
					<th align="right">Ubicacion</th><th>:</th>
					<td><input type="text" name="ubicacion_biblioteca" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ubicacion_biblioteca}"></td>
				</tr>
				<tr>
					<th align="right">Telefono</th><th>:</th>
					<td><input type="text" name="telefono_biblioteca" onkeyup="this.value=this.value.toUpperCase()" value="{$r.telefono_biblioteca}"></td>
				</tr>
				<tr>
					<th align="right">Correo</th><th>:</th>
					<td><input type="url" name="correo_biblioteca" onkeyup="this.value=this.value.toUpperCase()" value="{$r.correo_biblioteca}"></td>
				</tr>
				<tr>
					<th>Logo(*)</th><th>:</th>
					<td>
						<input type="hidden" name="MAX_FILE_SIZE" VALUE="1000000">
						<input type="file" name="logo_biblioteca">
						<input type="hidden" name="logo_biblioteca1" value="{$r.logo_biblioteca}">
						<br><b>{$r.logo_biblioteca}</b>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<input type="hidden" name="accion" value="">
						<input type="hidden" name="id_biblioteca" value="{$r.id_biblioteca}">
						<input type="button" value="Aceptar" onclick="validar();">
						

					</td>
				</tr>
				{/foreach}
			</table>
			<table>
				<tr>
					<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>