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
					<h1>LIBROS AUTORES</h1>
				</td>
				<td align="right" width="33%">
					<form name="formNuevo" method="post" action="libro_autor_nuevo.php">
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
					<th>NRO</th><th>AUTOR</th>
					<th><img src="../../imagenes/modificar2.png"></th><th><img src="../../imagenes/eliminar2.jpg">
					</th>
				</tr>
				{assign var="b" value="1"}
				{foreach item=r from=$libros_autores}
				
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.nombre_autor} {$r.ape_paterno} {$r.ape_materno}</td>
										
					<td align="center">
						<form name="formModif{$r.id_libro_autor}" method="post" action="libro_autor_modificar.php">
							<input type="hidden" name="id_libro_autor" value="{$r.id_libro_autor}">
							<input type="hidden" name="id_autor" value="{$r.id_autor}">
							<a href="javascrip:document.formModif{$r.id_libro_autor}.submit();" title="Modificar Libro Autor">
								Modificar>>
							</a>
						</form>
					</td>
					<td align="center">
						<form name="formElimi{$r.id_libro_autor}" method="post" action="prestamo_libro_autor.php">
							<input type="hidden" name="id_libro_autor" value="{$r.id_libro_autor}">
							<a href="javascript:document.formElimi{$r.id_libro_autor}.submit();" title="Eliminar libro autor Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a libro autor..?')); location.href='libro_autor_eliminar.php'">
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