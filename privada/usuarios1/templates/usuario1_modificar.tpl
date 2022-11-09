<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/val_usuario1.js"></script>

</head>
<body>
	<div class="formu_ingreso_datos">
	<form action="usuario1_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR USUARIOS ESTUDIANTES</h2>
		{foreach item=r from=$usuario1}
		<p>
			<input type="text" name="nombre" size="15" placeholder="Nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}">(*)
		</p>
		<p>
			<input type="text" name="ap" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ap}">(*)
		</p>
		<p>
			<input type="text" name="am" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()" value="{$r.am}">
		</p>
		<p>
			<input type="text" name="celular" size="15" placeholder="celular" onkeyup="this.value=this.value.toUpperCase()" value="{$r.celular}">
		</p>
		<input type="text" name="ci_usuario" size="15" placeholder="Carnet de Identidad" value="{$r.ci_usuario}">(*)
		<p>
			<input type="text" name="correo_usuario" size="35" placeholder="Correo electronico"  value="{$r.correo_usuario}">
		</p>
		
		<p>
			<input type="hidden" name="accion" value="">
			<input type="hidden" name="id_usuario1" value="{$r.id_usuario1}">
			<input type="button" name="Aceptar" onclick="validar();"class="boton2">
			<input type="button" name="Cancelar" onclick="javascript:location.href='usuarios1.php';"class="boton2">
		</p>
		{/foreach}
		<p><b>(*)Campos Obligatorios</b></p>
	</form>
	</div>
</body>
</html>