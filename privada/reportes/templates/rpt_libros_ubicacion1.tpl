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
				<h1> LIBROS -- UBICACION </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>TITULO</th><th>UBICACION</th><th>NUM DISPONIBLE</th><th>NUM EJEMPLAR</th><th>NUM INVENTARIO</th><th>OBSERVACIONES</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$libros_ubicacion1}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.titulo}</td>
				<td>{$r.ubicacion}</td>
				<td>{$r.num_disponible}</td>
				<td>{$r.num_ejemplar}</td>
				<td>{$r.num_inventario}</td>
				<td>{$r.observacion}</td>
			
				{assign var="b" value=$b+1}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b>{$fecha}
	</center>

</body>
</html>