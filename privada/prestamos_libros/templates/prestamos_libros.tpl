<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<table width="100%" border="0">
			<tr>
				<td width="33%" border="0">
					<tr>
						
					</tr>
					</table>
					
				</td>
				<td align="center" width="33%">
					<h1>PRESTAMOS LIBROS</h1>
				</td>
				<td align="right" width="33%">
					<form name="formNuevo" method="post" action="prestamo_libro_nuevo.php">
						<a href="javascrip:document.formNuevo.submit();">
							Nuevo>>>
						</a>
					</form>
				</td>
			</tr>
		</table>

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>FECHA INICIAL</th><th>FECHA FINAL</th><th>FECHA ENTREGA</th><th>OBSERVACION PRESTAMO</th><th>BIBLIOTECARIO</th>
					<th><img src="../../imagenes/modificar2.png"></th><th><img src="../../imagenes/eliminar2.jpg">
					</th>
				</tr>
				{assign var="b" value="1"}
				{foreach item=r from=$prestamos_libros}
				
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.fecha_inicial}</td>
					<td>{$r.fecha_final}</td>
					<td>{$r.fecha_entrega}</td>
					<td>{$r.observacion_prestamo}</td>
					<td>{$r.nombre_bib} {$r.apellido_bib}</td>
					<td align="center">
						<form name="formModif{$r.id_prestamo_libro}" method="post" action="prestamo_libro_modificar.php">
						<input type="hidden" name="id_prestamo_libro" value="{$r.id_prestamo_libro}">
						<input type="hidden" name="id_bibliotecario" value="{$r.id_bibliotecario}">
						<a href="javascript:document.formModif{$r.id_prestamo_libro}.submit();" title="Modificar Prestamo Libros">
						Modificar>>	
						</a>
						</form>
					</td>
					<td align="center">
						<form name="formElimi{$r.id_prestamo_libro}" method="post" action="prestamo_libro_eliminar.php">
							<input type="hidden" name="id_prestamo_libro" value="{$r.id_prestamo_libro}">
							<a href="javascript:document.formElimi{$r.id_prestamo_libro}.submit();" title="Eliminar Prestamo libros Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a el prestamo de libros..?')); location.href='prestamo_libro_eliminar.php'">
								Eliminar>>>
							</a>
						</form>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
				</table>
			</center>
		</body>
		</html>