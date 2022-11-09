<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/val_usuario1.js"></script>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="prestamo_libro_nuevo1.php" method="post" name="formu">
				<h2>REGISTRAR USUARIOS-ESTUDIANTES</h2>
				<p>
					<input type="text" name="id_tipo_libro"  placeholder="id tipo libro"> (*)
				<p>
				</p>
				}	<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();" class="boton2">
					<input type="button" value="Cancelar" onclick="javascript:location.href='prestamos_libros.php';" class="boton2">
				</p>
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>

	</body>
</html>