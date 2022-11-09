<?php
/* Smarty version 3.1.36, created on 2022-10-14 03:47:08
  from 'C:\wamp64\www\sis_biblioteca\privada\recetas\templates\receta_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348dbbc982f70_63781537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2748b3af687c1b72d1009531f32679474a18fd48' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\recetas\\templates\\receta_nuevo.tpl',
      1 => 1665296443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348dbbc982f70_63781537 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_receta.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			function buscar() {
			var d1, contenedor, url;
				contenedor =document.getElementById('chefs');
				contenedor2= document.getElementById('chef_seleccionado');
				contenedor3= document.getElementById('chef_insertado');
				
				d1 = document.formu.nombres.value;
				d2 = document.formu.ap.value;
				d3 = document.formu.especialidad.value;
				ajax = nuevoAjax();
				url="ajax_buscar_chef.php";
				param="nombres="+d1+"&ap="+d2+"&especialidad="+d3;	
				ajax.open("POST", url, true);
				ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				ajax.onreadystatechange = function() {
					if (ajax.readyState == 4){
						contenedor.innerHTML = ajax.responseText;
						contenedor2.innerHTML= "";
						contenedor3.innerHTML= "";
					}
				}
				ajax.send(param);
			}
				function buscar_chef(id_chef){
				var d1, contenedor, url;
					contenedor = document.getElementById('chef_seleccionado');
					contenedor2= document.getElementById('chefs');
					document.formu.id_chef.value = id_chef;

						d1 = id_chef;
						ajax = nuevoAjax();
						url="ajax_buscar_chef1.php";
						param ="id_chef="+d1;
						ajax.open("POST", url, true);
						ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						ajax.onreadystatechange = function() {
							if (ajax.readyState == 4){
								contenedor.innerHTML = ajax.responseText;
								contenedor2.innerHTML= "";
							}
						}
						ajax.send(param);
				}
				function insertar_chef() {
					var d1, contenedor, url;
					contenedor =document.getElementById('chef_seleccionado');
					contenedor2 =document.getElementById('chefs');
					contenedor3 =document.getElementById('chef_insertado');
					d1 = document.formu.nombres1.value;
					d2 = document.formu.ap1.value;
					d3 = document.formu.especialidad1.value;
					
					
					if(d3 ==""){
						alert("La especialidad es incorrecto o el campo esta vacio");
						document.formu.especialidad1.focus();
						return;
					}
					if(d2==""){
						alert("por favor introduzca Apellido paterno");
						document.formu.ap1.focus();
						return;
					}
				if(d1 == ""){
					alert("El nombre es incorrecto o el campo esta vacio");
					document.formu.nombres1.focus();
					return;
					}
				ajax = nuevoAjax();
				url="ajax_inserta_chef.php";
				param="nombres1="+d1+"&ap1="+d2+"&especialidad1="+d3;
				ajax.open("POST", url, true);	
				ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				ajax.onreadystatechange = function() {
					if (ajax.readyState == 4){
						contenedor.innerHTML = "";
						contenedor2.innerHTML= "";
						contenedor3.innerHTML= ajax.responseText;
					}
				}
				ajax.send(param);
			}
		<?php echo '</script'; ?>
>
</head>
<body>
			<h2>REGISTRAR RECETA</h2>
			<center>
			<form action="receta_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">Seleccione Chef(*)</th>
						<th>:</th>
						<td>
							<table>
								<tr>
									<td>
										<b>Nombres</b><br />
										<input type="text" name="nombres" value="" size="10" onKeyUp="buscar()">
									</td>
									<td>
										<b>Apellido Paterno</b><br />
										<input type="text" name="ap" value="" size="20" onKeyUp="buscar()">
									</td>
									<td>
										<b>Especialidad</b><br />
										<input type="text" name="especialidad" value="" size="15" onKeyUp="buscar()">
									</td>
									
								</tr>
							</table>
						
						</td>
					</tr>
					<tr>
						<td colspan="6">
							<table width="100%">
								<tr>
									<td colspan="3">
										<div id="chefs"></div>
										
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
					<tr>
						<td colspan="6">
							<table width="100%">
								<tr>
									<td colspan="3">
										<div id="chef_seleccionado"></div>
									</td>
								</tr>
							</table>
							
						</td>
					</tr>

					<tr>
						<td colspan="6">
							<table width="100%">
								<tr>
									<td colspan="3">
										<input type="hidden" name="id_chef">
										<div id="chef_insertado"></div>
									</td>
								</tr>
							</table>
							
						</td>
					</tr>

					<tr>
						<th align="right"> Receta(*)</th>
						<th>:</th>
						<td><input type="text" name="receta"></td>
					</tr>
					<tr>
						<th align="right">foto (*)</th>
						<th>:</th>
						<td><input type="text" name="foto"></td>
					</tr>
					<tr>
						<th align="right">Fecha Realización</th>
						<th>:</th>
						<td><input type="date" name="fecha_realizacion"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='recetas.php';">
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
	</html>



<?php }
}
