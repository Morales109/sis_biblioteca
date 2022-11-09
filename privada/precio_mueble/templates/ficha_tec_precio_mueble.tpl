<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar() {
			var d1, d2, d3, contenedor, ajax, url, param;
			contenedor = document.getElementById('precio_mueble1');
			d1 = document.formu.id_mueble.value;
			d2= document.formu.precio_venta.value;
			d3 = document.formu.precio_compra.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_precio_mueble.php";
			param="id_mueble="+d1+"&precio_venta="+d2+"&precio_compra="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		 function mostrar(id_mueble) {
		 	var d1, ventanaCalendario;
		 	d1 = id_mueble;
		 	 ventanaCalendario= window.open("ficha_tec_precio_mueble1.php?id_mueble="+d1, "calendario", "width=600, height=550, left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO");
		}
	</script>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>FICHA TECNICA MUEBLE</h1>
		</div>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<b>MUEBLE</b>
							<p>
							<select name="id_mueble" onchange="buscar()">
							<option value="">---Seleccione--</option>
							
							{foreach item=r from=$muebles}
							<option value="{$r.id_mueble}" >{$r.nombres} </option>
							{/foreach}
							</select> 
						</th>
						<th>
							<b>Precio Venta</b><br />
							<input type="text" name="precio_venta" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Precio Compra</b><br />
							<input type="text" name="precio_compra" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="precio_mueble1">
						</div>
	</body>
</html>