<?php
/* Smarty version 3.1.36, created on 2022-10-08 06:17:12
  from 'C:\wamp\www\sis_biblioteca\privada\precio_mueble\templates\rpt_precio_mueble1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6340f9c8d19066_92940632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcebbf2ba6ef67b2e49f222c63f6a36f32b4b9f2' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\precio_mueble\\templates\\rpt_precio_mueble1.tpl',
      1 => 1665202575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340f9c8d19066_92940632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				if(confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td>
				<img src="../biblioteca/logos/<?php echo $_smarty_tpl->tpl_vars['logo_biblioteca']->value;?>
" width="70%">
			</td>
			<td align="center" width="80%">
				<h1> PRECIOS - MUEBLES </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>MUEBLE</th><th>PRECIO VENTA</th><th>PRECIO COMPRA</th><th>FECHA VENTA</th><th>FECHA COMPRA</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['precio_mueble1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio_venta'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio_compra'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_prec_venta'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_prec_compra'];?>
</td>
				
			
				<?php $_smarty_tpl->_assignInScope('b', $_smarty_tpl->tpl_vars['b']->value+1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

	</center>

</body>
</html><?php }
}
