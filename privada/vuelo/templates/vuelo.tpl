<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar() {
			var d1, d2, d3, d4, contenedor, ajax, url, param;
				contenedor = document.getElementById('vuelos');

			d1 = document.formu.id_hotel.value;
			d2= document.formu.origen.value;
			d3 = document.formu.destino.value;
			d4 = document.formu.fecha.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_vuelos.php";
			param="id_hotel="+d1+"&origen="+d2+"&destino="+d3+"&fecha="+d4;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		
		 
	</script>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>VUELOS</h1>
		</div>
		<td align="right" width="33%">
				<form name="formNuevo" method="post" action="vuelo_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
		
			</td>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<b>HOTEL</b>
							<p>
							<select name="id_hotel" onchange="buscar()">
							<option value="">---Seleccione--</option>
							{foreach item=r from=$hoteles}
							<option value="{$r.id_hotel}" onclick="buscar();">{$r.nombre}</option>
							{/foreach}
							</select> 
						</p>

						</th>
						<th>
							<b>Origen</b><br />
							<input type="text" name="origen" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Destino</b><br />
							<input type="text" name="destino" value="" size="15" onKeyUp="buscar()">
						</th>
						<th>
							<b>Fecha</b><br />
							<input type="text" name="fecha" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="vuelos">
						
			<!--LISTADO  -->

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>HOTEL</th><th>ORIGEN</th><th>DESTINO</th><th>FECHA</th>
					
				</tr>
				{assign var="b" value="1"}
				{foreach item=r from=$vuelos}
				
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.origen}</td>
					<td>{$r.destino}</td>
					<td>{$r.fecha}</td>
					

					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
				</table>
				
			</center>
</div>
	</body>
</html>