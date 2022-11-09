<?php
/* Smarty version 3.1.36, created on 2022-09-27 04:57:54
  from 'C:\wamp64\www\sis_biblioteca\privada\reportes\templates\rpt_personas_genero1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633282d2f40952_03642345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6776ac85daf2c95e74df009b36d852920b914f6c' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\reportes\\templates\\rpt_personas_genero1.tpl',
      1 => 1663717892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633282d2f40952_03642345 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1> PERSONAS --GENERO </h1>
			</td>		
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>AP</th><th>AM</th><th>NOMBRES</th><th>GENERO</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas_genero1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == 'F') {?>FEMENINO<?php } else { ?>MASCULINO<?php }?></td>
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
