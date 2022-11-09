<?php
/* Smarty version 3.1.36, created on 2022-09-23 03:56:49
  from 'C:\wamp64\www\sis_biblioteca\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d2e81d57a17_11302945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9095270e32f40a3adaadbb2fdd5a543634829b76' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\templates\\menu_sup.tpl',
      1 => 1651176692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d2e81d57a17_11302945 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	</head>
	<body>
		<div class="cabecera">
			<img src="../imagenes/<?php echo $_smarty_tpl->tpl_vars['logo_biblioteca']->value;?>
" width="7%">
			<div class="titulo">
				BIBLIOTECA "<?php echo $_smarty_tpl->tpl_vars['nombre_biblioteca']->value;?>
"
				
			</div>
			<div class="usuario">
				Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
				Rol:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
				
			</div>
		</div>
	</body>
</html><?php }
}
