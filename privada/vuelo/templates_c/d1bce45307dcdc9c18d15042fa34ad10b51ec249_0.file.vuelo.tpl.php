<?php
/* Smarty version 3.1.36, created on 2022-10-09 05:17:24
  from 'C:\wamp\www\sis_biblioteca\privada\vuelo\templates\vuelo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63423d44080b12_96323433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1bce45307dcdc9c18d15042fa34ad10b51ec249' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\vuelo\\templates\\vuelo.tpl',
      1 => 1665284490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63423d44080b12_96323433 (Smarty_Internal_Template $_smarty_tpl) {
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
			var d1, d2, d3, d4, contenedor, ajax, url, param;
				contenedor = document.getElementById('vuelos');

			d1 = document.formu.id_hotel.value;
			d2= document.formu.origen.value;
			d3 = document.formu.destino.value;
			d4 = document.formu.fecha.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_vuelos.php";
			param="id_hotel="+d1+"&origen="+d2+"&destino="+d3+"&fecha="+d4;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		
		 
	<?php echo '</script'; ?>
>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>VUELOS</h1>
		</div>
		<td align="right" width="33%">
				<form name="formNuevo" method="post" action="vuelo_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
		
			</td>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<b>HOTEL</b>
							<p>
							<select name="id_hotel" onchange="buscar()">
							<option value="">---Seleccione--</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_hotel'];?>
" onclick="buscar();"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select> 
						</p>

						</th>
						<th>
							<b>Origen</b><br />
							<input type="text" name="origen" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Destino</b><br />
							<input type="text" name="destino" value="" size="15" onKeyUp="buscar()">
						</th>
						<th>
							<b>Fecha</b><br />
							<input type="text" name="fecha" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="vuelos">
						
			<!--LISTADO  -->

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>HOTEL</th><th>ORIGEN</th><th>DESTINO</th><th>FECHA</th>
					
				</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				
				<tr>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['origen'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['destino'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha'];?>
</td>
					

					<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
				</table>
				
			</center>
</div>
	</body>
</html><?php }
}
