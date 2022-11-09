<?php
/* Smarty version 3.1.36, created on 2022-10-09 06:37:21
  from 'C:\wamp\www\sis_biblioteca\privada\precio_mueble\templates\ficha_tec_precio_mueble.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634250012f1479_91205747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728e0b48b8c9ab6b87c51c97a135be8d577bd50c' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\precio_mueble\\templates\\ficha_tec_precio_mueble.tpl',
      1 => 1665290210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634250012f1479_91205747 (Smarty_Internal_Template $_smarty_tpl) {
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
			var d1, d2, d3, contenedor, ajax, url, param;
			contenedor = document.getElementById('precio_mueble1');
			d1 = document.formu.id_mueble.value;
			d2= document.formu.precio_venta.value;
			d3 = document.formu.precio_compra.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_precio_mueble.php";
			param="id_mueble="+d1+"&precio_venta="+d2+"&precio_compra="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		 function mostrar(id_mueble) {
		 	var d1, ventanaCalendario;
		 	d1 = id_mueble;
		 	 ventanaCalendario= window.open("ficha_tec_precio_mueble1.php?id_mueble="+d1, "calendario", "width=600, height=550, left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO");
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>FICHA TECNICA MUEBLE</h1>
		</div>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<b>MUEBLE</b>
							<p>
							<select name="id_mueble" onchange="buscar()">
							<option value="">---Seleccione--</option>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['muebles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_mueble'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 </option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select> 
						</th>
						<th>
							<b>Precio Venta</b><br />
							<input type="text" name="precio_venta" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Precio Compra</b><br />
							<input type="text" name="precio_compra" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="precio_mueble1">
						</div>
	</body>
</html><?php }
}
