<?php
/* Smarty version 3.1.36, created on 2022-10-08 04:16:29
  from 'C:\wamp\www\sis_biblioteca\privada\reportes\templates\rpt_libros_ubicacion1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6340dd7ddfaa42_83367332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a65b968db74a24fbea0c8c60df6a6b893b579b38' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\reportes\\templates\\rpt_libros_ubicacion1.tpl',
      1 => 1663735815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340dd7ddfaa42_83367332 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1> LIBROS -- UBICACION </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>TITULO</th><th>UBICACION</th><th>NUM DISPONIBLE</th><th>NUM EJEMPLAR</th><th>NUM INVENTARIO</th><th>OBSERVACIONES</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros_ubicacion1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['titulo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ubicacion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['num_disponible'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['num_ejemplar'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['num_inventario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['observacion'];?>
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
