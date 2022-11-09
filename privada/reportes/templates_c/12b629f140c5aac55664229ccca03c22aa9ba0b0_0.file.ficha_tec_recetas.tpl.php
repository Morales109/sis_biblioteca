<?php
/* Smarty version 3.1.36, created on 2022-10-09 05:57:44
  from 'C:\wamp\www\sis_biblioteca\privada\reportes\templates\ficha_tec_recetas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634246b8e80686_84377543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b629f140c5aac55664229ccca03c22aa9ba0b0' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\reportes\\templates\\ficha_tec_recetas.tpl',
      1 => 1663905647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634246b8e80686_84377543 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="UTF-8">
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar() {
			alert("a");
			var d1, d2, d3, contenedor, ajax, url, param;
				contenedor = document.getElementById('recetas1');
			d1 = document.formu.receta.value;
			d2= document.formu.foto.value;
			d3 = document.formu.fecha_realizacion.value;
			alert(d1);
			ajax = nuevoAjax();
			url = "ajax_buscar_receta.php";
			param="receta="+d1+"&foto="+d2+"&fecha_realizacion="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		 function mostrar(id_receta) {
		 	var d1, ventanaCalendario;
		 	d1 = id_receta;
		 	 ventanaCalendario= window.open("ficha_tec_recetas1.php?id_receta="+d1, "calendario", "width=600, height=550, left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO");
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>FICHA TECNICA RECETAS</h1>
		</div>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<!--<b>Receta</b><br />
							<input type="text" name="receta" value="" size="25" onKeyUp="buscar()">-->
							<b>RECETA</b><br>
							<select name="receta" onchange="buscar()">
								<option value="">-Seleccione--</option>
								<option value="T">Todos</option>
								<option value="pastel">Pastel de Choclo</option>
								<option value="tortilla">Tortilla Simple</option>
								<option value="picante">Picante de Pollo</option>
								<option value="sopa">Sopa de Mani</option>
							</select>
						</th>
						<th>
							<b>Foto</b><br />
							<input type="text" name="foto" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Fecha Realizacion</b><br />
							<input type="text" name="fecha_realizacion" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="recetas1">
						</div>
	</body>
</html><?php }
}
