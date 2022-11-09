<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="UTF-8">
	{literal}
	<script type="text/javascript">
		function validar() {
			ubicacion= document.formu.ubicacion.value;
			if(document.formu.ubicacion.value ==""){
				alert("Por favor seleccione la ubicacion del libro");
				document.formu.ubicacion.focus();
				return;
			}
			ventanaCalendario =window.open("rpt_libros_ubicacion1.php?ubicacion=" +ubicacion , "calendario", "width=600, height=500, left=100, scrollbars=yes, menubars=no, statusbar=NO, status=NO, resizable=YES, location=NO")
		}
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE LIBROS POR UBICACION </h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione ubicacion</b>
				<select name="ubicacion">
					<option value="">-Seleccione--</option>
					<option value="T">Todos</option>
					<option value="1-A">Casillero 1-A</option>
					<option value="1-B">Casillero 1-B</option>
					<option value="1-C">Casillero 1-C</option>

					<option value="2-A">Casillero 2-A</option>
					<option value="2-B">Casillero 2-B</option>
					<option value="2-C">Casillero 2-C</option>
					<option value="3-A">Casillero 3-A</option>
					<option value="3-B">Casillero 3-B</option>
					<option value="3-C">Casillero 3-C</option>
					<option value="4-A">Casillero 3-A</option>
					<option value="4-B">Casillero 3-B</option>
					<option value="4-C">Casillero 3-C</option>
				</select>
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton">
			</p>
		</form>
	</div>
</body>
</html>