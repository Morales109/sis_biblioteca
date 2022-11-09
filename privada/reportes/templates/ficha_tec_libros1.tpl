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
				<h1> FICHA TECNICA DE LIBROS </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$libro}
						<tr>
							<th align="right">TIPO DE LIBRO</th><th>:</th>
							<td><input type="text" name="tipo_libro" value="{$r.tipo_libro}" disabled=""></td>
						</tr>

						<tr>
							<th align="right">Titulo</th><th>:</th>
							<td><input type="text" name="titulo" value="{$r.titulo}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Ubicacion</th><th>:</th>
							<td><input type="text" name="ubicacion" value="{$r.ubicacion}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Num disponible</th><th>:</th>
							<td><input type="text" name="num_disponible" value="{$r.num_disponible}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Num Ejemplar</th><th>:</th>
							<td><input type="text" name="num_ejemplar" value="{$r.num_ejemplar}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Num Inventario</th><th>:</th>
							<td><input type="text" name="num_inventario" value="{$r.num_inventario}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Observacion</th><th>:</th>
							<td><input type="text" name="observacion" value="{$r.observacion}" disabled=""></td>
						</tr>
						
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
			
</body>
</html>