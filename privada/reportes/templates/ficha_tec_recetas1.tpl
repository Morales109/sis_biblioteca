<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir() {
				if(confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../biblioteca/logos/{$logo_biblioteca}" width="70%">
			</td>
			<td align="center" width="80%">
				<h1> FICHA TECNICA DE RECETAS </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$receta}
						<tr>
							<th align="right">CHEF</th><th>:</th>
							<td><input type="text" name="id_chef" value="{$r.nombres}" disabled=""></td>
						</tr>

						<tr>
							<th align="right">Receta</th><th>:</th>
							<td><input type="text" name="receta" value="{$r.receta}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Foto</th><th>:</th>
							<td><input type="text" name="foto" value="{$r.foto}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Fecha Realizacion</th><th>:</th>
							<td><input type="text" name="fecha_realizacion" value="{$r.fecha_realizacion}" disabled=""></td>
						</tr>
						
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
			
</body>
</html>