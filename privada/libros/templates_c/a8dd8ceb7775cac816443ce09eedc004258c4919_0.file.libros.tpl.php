<?php
/* Smarty version 3.1.36, created on 2022-09-23 04:24:25
  from 'C:\wamp64\www\sis_biblioteca\privada\libros\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d34f9db2c28_38911339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8dd8ceb7775cac816443ce09eedc004258c4919' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\libros\\templates\\libros.tpl',
      1 => 1662296235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d34f9db2c28_38911339 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<table width="100%" border="0">
			<tr>
				<td width="33%" border="0">
					<tr>
						
					</tr>
					</table>
					
				</td>
				<td align="center" width="33%">
					<h1>LIBROS</h1>
				</td>
				<td align="right" width="33%">
					<form name="formNuevo" method="post" action="libro_nuevo.php">
						<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>
						</a>
					</form>
				</td>
			</tr>
		</table>

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>TITULO</th><th>UBICACION</th><th>NUM_DISP</th><th>NUM_EJEM</th><th>INVENTARIO</th><th>OBSERV.</th><th>TIPO LIBRO</th>
					<th><img src="../../imagenes/modificar2.png"></th><th><img src="../../imagenes/eliminar2.jpg">
					</th>
				</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'r');
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
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_libro'];?>
</td>
					
					
			
					<td align="center">
						<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_libro'];?>
" method="post" action="libro_modificar.php">
						<input type="hidden" name="id_libro" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_libro'];?>
">
						<input type="hidden" name="id_tipo_libro" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_libro'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_libro'];?>
.submit();" title="Modificar Libros">
						Modificar>>	
						</a>
					</form>
						</form>
					</td>
					<td align="center">
						<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_libro'];?>
" method="post" action="libro_eliminar.php">
							<input type="hidden" name="id_libro" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_libro'];?>
">
							<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_libro'];?>
.submit();" title="Eliminar libro Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a libro..?')); location.href='libro_eliminar.php'">
								Eliminar>>
							</a>
						</form>
					</td>
					





					<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
				</table>
				
			</center>
		</body>
		</html><?php }
}
