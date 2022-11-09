<?php
/* Smarty version 3.1.36, created on 2022-10-14 03:46:52
  from 'C:\wamp64\www\sis_biblioteca\privada\precio_mueble\templates\ficha_tec_precio_mueble1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348dbac3a9371_12591697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '617b7aaad2cda0c4575b3ead63ed3e5fb24cbb9a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\precio_mueble\\templates\\ficha_tec_precio_mueble1.tpl',
      1 => 1665301013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348dbac3a9371_12591697 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
			function imprimir() {
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
				<h1> FICHA TECNICA DE PRECIO MUEBLES </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['precio_mueble']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">Muebles</th><th>:</th>
							<td><input type="text" name="id_mueble" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" disabled=""></td>
						</tr>

						<tr>
							<th align="right">Precio Venta</th><th>:</th>
							<td><input type="text" name="precio_venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['precio_venta'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Precio  Compra</th><th>:</th>
							<td><input type="text" name="precio_compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['precio_compra'];?>
" disabled=""></td>
						</tr>
						
						
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				</td>
			</tr>
		</table>
			
</body>
</html><?php }
}
