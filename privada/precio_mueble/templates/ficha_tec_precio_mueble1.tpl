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
				<h1> FICHA TECNICA DE PRECIO MUEBLES </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$precio_mueble}
						<tr>
							<th align="right">Muebles</th><th>:</th>
							<td><input type="text" name="id_mueble" value="{$r.nombres}" disabled=""></td>
						</tr>

						<tr>
							<th align="right">Precio Venta</th><th>:</th>
							<td><input type="text" name="precio_venta" value="{$r.precio_venta}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Precio  Compra</th><th>:</th>
							<td><input type="text" name="precio_compra" value="{$r.precio_compra}" disabled=""></td>
						</tr>
						
						
						{/foreach}
					</table>
				</td>
			</tr>
		</table>
			
</body>
</html>