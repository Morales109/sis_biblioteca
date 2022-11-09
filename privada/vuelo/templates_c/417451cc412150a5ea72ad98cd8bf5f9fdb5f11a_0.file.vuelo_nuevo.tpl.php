<?php
/* Smarty version 3.1.36, created on 2022-10-14 04:57:04
  from 'C:\wamp64\www\sis_biblioteca\privada\vuelo\templates\vuelo_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348ec20aabf35_04887506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417451cc412150a5ea72ad98cd8bf5f9fdb5f11a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\vuelo\\templates\\vuelo_nuevo.tpl',
      1 => 1665296555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348ec20aabf35_04887506 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_vuelo.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			function buscar() {
			var d1, contenedor, url;
				contenedor =document.getElementById('hoteles');
				contenedor2= document.getElementById('hotel_seleccionado');
				contenedor3= document.getElementById('hotel_insertado');
				
				d1 = document.formu.nombre.value;
				d2 = document.formu.codigo.value;
				d3 = document.formu.ciudad.value;
				ajax = nuevoAjax();
				url="ajax_buscar_hotel.php";
				param="nombre="+d1+"&codigo="+d2+"&ciudad="+d3;	
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
				function buscar_hotel(id_hotel){
				var d1, contenedor, url;
					contenedor = document.getElementById('hotel_seleccionado');
					contenedor2= document.getElementById('hoteles');
					document.formu.id_hotel.value = id_hotel;

						d1 = id_hotel;
						ajax = nuevoAjax();
						url="ajax_buscar_hotel1.php";
						param ="id_hotel="+d1;
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
				function insertar_hotel() {
					var d1, contenedor, url;
					contenedor =document.getElementById('hotel_seleccionado');
					contenedor2 =document.getElementById('hoteles');
					contenedor3 =document.getElementById('hotel_insertado');
					d1 = document.formu.nombre1.value;
					d2 = document.formu.codigo1.value;
					d3 = document.formu.ciudad1.value;
					
					
					
					if(d1 ==""){
						alert("El nombre es incorrecto o el campo esta vacio");
						document.formu.nombre1.focus();
						return;
					}
					if(d2==""){
						alert("El codigo es incorrecto o está vacio");
						document.formu.codigo1.focus();
						return;
					}
				if(d3 == ""){
					alert("La ciudad esta vacio o es incorrecta");
					document.formu.ciudad1.focus();
					return;
					}
				ajax = nuevoAjax();
				url="ajax_inserta_hotel.php";
				param="nombre1="+d1+"&codigo1="+d2+"&ciudad1="+d3;
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
			<h2>REGISTRAR VUELO</h2>
			<center>
			<form action="vuelo_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">Seleccione Hotel(*)</th>
						<th>:</th>
						<td>
							<table>
								<tr>
									<td>
										<b>Nombre</b><br />
										<input type="text" name="nombre" value="" size="10" onKeyUp="buscar()">
									</td>
									<td>
										<b>Codigo</b><br />
										<input type="text" name="codigo" value="" size="20" onKeyUp="buscar()">
									</td>
									
									<td>
										<b>Ciudad</b><br />
										<input type="text" name="ciudad" value="" size="15" onKeyUp="buscar()">
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
										<div id="hoteles"></div>
										
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
										<div id="hotel_seleccionado"></div>
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
										<input type="hidden" name="id_hotel">
										<div id="hotel_insertado"></div>
									</td>
								</tr>
							</table>
							
						</td>
					</tr>

					<tr>
						<th align="right"> Origen(*)</th>
						<th>:</th>
						<td><input type="text" name="origen"></td>
					</tr>
					<tr>
						<th align="right">Destino (*)</th>
						<th>:</th>
						<td><input type="text" name="destino"></td>
					</tr>
					<tr>
						<th align="right">Fecha </th>
						<th>:</th>
						<td><input type="date" name="fecha"></td>
					</tr>
					<tr>
						<th align="right">Horas </th>
						<th>:</th>
						<td><input type="text" name="horas"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='vuelo.php';">
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
