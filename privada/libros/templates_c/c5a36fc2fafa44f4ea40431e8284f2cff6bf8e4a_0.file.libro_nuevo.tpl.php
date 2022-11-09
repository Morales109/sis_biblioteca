<?php
/* Smarty version 3.1.36, created on 2022-09-23 04:24:27
  from 'C:\wamp64\www\sis_biblioteca\privada\libros\templates\libro_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d34fbe799f2_83463036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a36fc2fafa44f4ea40431e8284f2cff6bf8e4a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\libros\\templates\\libro_nuevo.tpl',
      1 => 1662296218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d34fbe799f2_83463036 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/val_libro.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			function buscar() {
			var d1, contenedor, url;
				contenedor =document.getElementById('tipos_libros');
				contenedor2= document.getElementById('tipo_libro_seleccionado');
				/*contenedor3= document.getElementById('persona_insertado');*/
				d1 = document.formu.tipo_libro.value;
				ajax = nuevoAjax();
				url="ajax_buscar_tipo_libro.php";
				param="tipo_libro="+d1;	
				ajax.open("POST", url, true);
				ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				ajax.onreadystatechange = function() {
					if (ajax.readyState == 4){
						contenedor.innerHTML = ajax.responseText;
						contenedor2.innerHTML= "";
						/*contenedor3.innerHTML= "";*/
					}
				}
				ajax.send(param);
			}
				function buscar_tipo_libro(id_tipo_libro){
				var d1, contenedor, url;
					contenedor = document.getElementById('tipo_libro_seleccionado');
					contenedor2= document.getElementById('tipos_libros');
					document.formu.id_tipo_libro.value = id_tipo_libro;

						d1 = id_tipo_libro;
						ajax = nuevoAjax();
						url="ajax_buscar_tipo_libro1.php";
						param ="id_tipo_libro="+d1;
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
				function insertar_tipo_libro() {
					var d1, contenedor, url;
					contenedor =document.getElementById('tipo_libro_seleccionado');
					contenedor2 =document.getElementById('tipos_libros');
					contenedor3 =document.getElementById('tipo_libro_insertada');
					d1 = document.formu.tipo_libro1.value;
					if(d1 ==""){
						alert("El tipo de libro es incorrecto o el campo esta vacio");
						document.formu.tipo_libro1.focus();
						return;
					}
				ajax = nuevoAjax();
				url="ajax_inserta_tipo_libro.php";
				param="tipo_libro1="+d1;
				ajax.open("POST", url, true);	
				ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				ajax.onreadystatechange =function() {
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
			<h2>REGISTRAR LIBRO</h2>
			<center>
			<form action="libro_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">Seleccione Tipo de Libro(*)</th>
						<th>:</th>
						<td>
							<table>
								<tr>
									<td>
										<b>Tipo de Libro</b><br />
										<input type="text" name="tipo_libro" value="" size="20" onKeyUp="buscar()">
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
										<div id="tipos_libros"></div>
										
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
										<div id="tipo_libro_seleccionado"></div>
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
										<input type="hidden" name="id_tipo_libro">
										<div id="tipo_libro_insertada"></div>
									</td>
								</tr>
							</table>
							
						</td>
					</tr>

					<tr>
						<th align="right">Titulo (*)</th>
						<th>:</th>
						<td><input type="text" name="titulo"></td>
					</tr>
					<tr>
						<th align="right">Ubicacion</th>
						<th>:</th>
						<td><input type="text" name="ubicacion"></td>
					</tr>
					<tr>
						<th align="right">Nº libros disponibles (*)</th>
						<th>:</th>
						<td><input type="text" name="num_disponible"></td>
					</tr>
					<tr>
						<th align="right">Nº libros ejmplares (*)</th>
						<th>:</th>
						<td><input type="text" name="num_ejemplar"></td>
					</tr>
					<tr>
						<th align="right">Nº de inventario</th>
						<th>:</th>
						<td><input type="text" name="num_inventario"></td>
					</tr>
					<tr>
						<th align="right">Observacion</th>
						<th>:</th>
						<td><input type="text" name="Observacion"></td>
					</tr>
					
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='lbros.php';">
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
