<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_persona.js"></script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="tipo_libro_nuevo1.php" method="post" name="formu">
				<h2>REGISTRAR TIPO DE LIBRO</h2>
				<input type="text" name="tipo_libro" size="25" placeholder="Tipo de libro"> (*)
				<p>
					
				<p>
					<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();" class="boton2">
					<input type="button" value="Cancelar" onclick="javascript:location.href='tipos_libros.php';" class="boton2">
				</p>
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>

	</body>
</html>