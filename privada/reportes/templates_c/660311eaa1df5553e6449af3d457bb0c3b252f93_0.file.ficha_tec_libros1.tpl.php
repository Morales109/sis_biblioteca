<?php
/* Smarty version 3.1.36, created on 2022-10-05 04:57:41
  from 'C:\wamp64\www\sis_biblioteca\privada\reportes\templates\ficha_tec_libros1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633d0ec5bff126_24828443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660311eaa1df5553e6449af3d457bb0c3b252f93' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\reportes\\templates\\ficha_tec_libros1.tpl',
      1 => 1662642115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633d0ec5bff126_24828443 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1> FICHA TECNICA DE LIBROS </h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libro']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">TIPO DE LIBRO</th><th>:</th>
							<td><input type="text" name="tipo_libro" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_libro'];?>
" disabled=""></td>
						</tr>

						<tr>
							<th align="right">Titulo</th><th>:</th>
							<td><input type="text" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['titulo'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Ubicacion</th><th>:</th>
							<td><input type="text" name="ubicacion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ubicacion'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Num disponible</th><th>:</th>
							<td><input type="text" name="num_disponible" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['num_disponible'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Num Ejemplar</th><th>:</th>
							<td><input type="text" name="num_ejemplar" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['num_ejemplar'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Num Inventario</th><th>:</th>
							<td><input type="text" name="num_inventario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['num_inventario'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Observacion</th><th>:</th>
							<td><input type="text" name="observacion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['observacion'];?>
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
