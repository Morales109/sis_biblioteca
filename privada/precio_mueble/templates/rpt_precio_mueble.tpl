<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="UTF-8">
	{literal}
	<script type="text/javascript">
		function validar() {
			id_mueble= document.formu.id_mueble.value;
			if(document.formu.id_mueble.value ==""){
				alert("Por favor seleccione el mueble");
				document.formu.id_mueble.focus();
				return;
			}
			ventanaCalendario =window.open("rpt_precio_mueble1.php?id_mueble=" +id_mueble , "calendario", "width=600, height=500, left=100, scrollbars=yes, menubars=no, statusbar=NO, status=NO, resizable=YES, location=NO")
		}
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PRECIOS MUEBLES </h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione mueble</b>
				<select name="id_mueble">
					<option value="">-Seleccione--</option>
					<option value="T">-Todos--</option>
					{foreach item=r from=$muebles}
							<option value="{$r.id_mueble}">{$r.nombres} </option>
							{/foreach}
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