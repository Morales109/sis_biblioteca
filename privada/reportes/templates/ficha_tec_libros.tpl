<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar() {
			var d1, d2, d3, contenedor, ajax, url, param;
				contenedor = document.getElementById('libros1');
			d1 = document.formu.titulo.value;
			d2= document.formu.ubicacion.value;
			d3 = document.formu.num_inventario.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_libro.php";
			param="titulo="+d1+"&ubicacion="+d2+"&num_inventario="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		 function mostrar(id_libro) {
		 	var d1, ventanaCalendario;
		 	d1 = id_libro;
		 	 ventanaCalendario= window.open("ficha_tec_libros1.php?id_libro="+d1, "calendario", "width=600, height=550, left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO");
		}
	</script>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>FICHA TECNICA LIBROS</h1>
		</div>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<b>Titulo</b><br />
							<input type="text" name="titulo" value="" size="25" onKeyUp="buscar()">
						</th>
						<th>
							<b>Ubicación</b><br />
							<input type="text" name="ubicacion" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Nº Inventario</b><br />
							<input type="text" name="num_inventario" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="libros1">
						</div>
	</body>
</html>