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
					<h1>RESERVAS</h1>
				</td>
				<td align="right" width="33%">
					<form name="formNuevo" method="post" action="reserva_nuevo.php">
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
					<th>NRO</th><th>FECHA RESERVA</th><th>OBSERVACION</th><th>USUARIO_EST</th>
					<th><img src="../../imagenes/modificar2.png"></th><th><img src="../../imagenes/eliminar2.jpg">
					</th>
				</tr>
				{assign var="b" value="1"}
				{foreach item=r from=$reservas}
				
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.fecha_reserva}</td>
					<td>{$r.observacion}</td>
					<td>{$r.nombre} {$r.ap} {$r.am}</td>
					<td align="center">
						<form name="formModif{$r.id_reserva}" method="post" action="reserva_modificar.php">
						<input type="hidden" name="id_reserva" value="{$r.id_reserva}">
						<input type="hidden" name="id_usuario1" value="{$r.id_usuario1}">
						<a href="javascript:document.formModif{$r.id_reserva}.submit();" title="Modificar Reserva de Libros">
						Modificar>>	
						</a>
						</form>
					</td>
					<td align="center">
						<form name="formElimi{$r.id_reserva}" method="post" action="reserva_eliminar.php">
							<input type="hidden" name="id_reserva" value="{$r.id_reserva}">
							<a href="javascript:document.formElimi{$r.id_reserva}.submit();" title="Eliminar Reserva Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a la reserva..?')); location.href='reserva_eliminar.php'">
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