<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
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
				<h1> PRECIOS - MUEBLES </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>MUEBLE</th><th>PRECIO VENTA</th><th>PRECIO COMPRA</th><th>FECHA VENTA</th><th>FECHA COMPRA</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$precio_mueble1}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres}</td>
				<td>{$r.precio_venta}</td>
				<td>{$r.precio_compra}</td>
				<td>{$r.fecha_prec_venta}</td>
				<td>{$r.fecha_prec_compra}</td>
				
			
				{assign var="b" value=$b+1}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b>{$fecha}
	</center>

</body>
</html>