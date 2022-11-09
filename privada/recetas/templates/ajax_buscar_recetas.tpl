<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="/js/buscar_chefs.js"></script>
	<script type="text/javascript">
		function buscar() {
			var d1, d2, d3, contenedor, ajax, url, param;
				contenedor = document.getElementById('recetas');

			d1 = document.formu.id_chef.value;
			d2= document.formu.receta.value;
			d3 = document.formu.foto.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_recetas.php";
			param="id_chef="+d1+"&receta="+d2+"&foto="+d3;
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
			<h1>RECETAS</h1>
		</div>
		<td align="right" width="33%">
				<form name="formNuevo" method="post" action="receta_nuevo.php">
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
							<b>CHEF</b>
							<p>
							<select name="id_chef" onchange="buscar()">
							<option value="">---Seleccione--</option>
							{foreach item=r from=$chefs}
							<option value="{$r.id_chef}">{$r.nombres} {$r.ap}</option>
							{/foreach}
							</select> 
							</p>

						</th>
						<th>
							<b>Receta</b><br />
							<input type="text" name="receta" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Foto</b><br />
							<input type="text" name="foto" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="recetas">
						
			<!--LISTADO  RECETAS-->

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>CHEF</th><th>RECETA</th><th>FOTO</th><th>FECHA REALIZACION</th>
					
				</tr>
				{assign var="b" value="1"}
				{foreach item=r from=$recetas}
				
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.nombres} {$r.ap}</td>
					<td>{$r.receta}</td>
					<td>{$r.foto}</td>
					<td>{$r.fecha_realizacion}</td>
					

					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
				</table>
				
			</center>
</div>
	</body>
</html>