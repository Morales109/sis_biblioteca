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
					<h1>LIBROS</h1>
				</td>
				<td align="right" width="33%">
					<form name="formNuevo" method="post" action="libro_nuevo.php">
						<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>
						</a>
					</form>
				</td>
			</tr>
		</table>

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>TITULO</th><th>UBICACION</th><th>NUM_DISP</th><th>NUM_EJEM</th><th>INVENTARIO</th><th>OBSERV.</th><th>TIPO LIBRO</th>
					<th><img src="../../imagenes/modificar2.png"></th><th><img src="../../imagenes/eliminar2.jpg">
					</th>
				</tr>
				{assign var="b" value="1"}
				{foreach item=r from=$libros}
				
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.titulo}</td>
					<td>{$r.ubicacion}</td>
					<td>{$r.num_disponible}</td>
					<td>{$r.num_ejemplar}</td>
					<td>{$r.num_inventario}</td>
					<td>{$r.observacion}</td>
					<td>{$r.tipo_libro}</td>
					
					
			
					<td align="center">
						<form name="formModif{$r.id_libro}" method="post" action="libro_modificar.php">
						<input type="hidden" name="id_libro" value="{$r.id_libro}">
						<input type="hidden" name="id_tipo_libro" value="{$r.id_tipo_libro}">
						<a href="javascript:document.formModif{$r.id_libro}.submit();" title="Modificar Libros">
						Modificar>>	
						</a>
					</form>
						</form>
					</td>
					<td align="center">
						<form name="formElimi{$r.id_libro}" method="post" action="libro_eliminar.php">
							<input type="hidden" name="id_libro" value="{$r.id_libro}">
							<a href="javascript:document.formElimi{$r.id_libro}.submit();" title="Eliminar libro Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a libro..?')); location.href='libro_eliminar.php'">
								Eliminar>>
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