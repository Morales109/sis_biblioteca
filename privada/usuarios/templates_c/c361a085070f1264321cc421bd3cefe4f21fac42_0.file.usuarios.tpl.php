<?php
/* Smarty version 3.1.36, created on 2022-09-23 04:42:25
  from 'C:\wamp64\www\sis_biblioteca\privada\usuarios\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d39318da7c7_77833114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c361a085070f1264321cc421bd3cefe4f21fac42' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\usuarios\\templates\\usuarios.tpl',
      1 => 1662277305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d39318da7c7_77833114 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>
				</table>
			</td>
			<td align="center" width="33%">
				<h1>USUARIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="usuario_nuevo.php">
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
				<th>NRO</th><th>USUARIO</th><th>PERSONA</th>
				<th><img src="../../imagenes/modificar2.png"></th><th><img src="../../imagenes/eliminar2.jpg">
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuarios'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
" method="post" action="usuario_modificar.php">
						<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
						<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
.submit();" title="Modificar Usuarios">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
" method="post" action="usuario_eliminar.php">
						<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
.submit();" title="Eliminar Usuario" onclick="javascript:return(confirm('Desea realmente Eliminar al usuario:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
?')); location.href='usuario1_eliminar.php'">
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
</html>
<?php }
}
