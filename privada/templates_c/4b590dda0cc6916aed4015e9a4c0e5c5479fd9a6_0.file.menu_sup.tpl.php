<?php
/* Smarty version 3.1.36, created on 2022-10-08 03:52:57
  from 'C:\wamp\www\sis_biblioteca\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6340d7f9881258_80071505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b590dda0cc6916aed4015e9a4c0e5c5479fd9a6' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\templates\\menu_sup.tpl',
      1 => 1651176692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340d7f9881258_80071505 (Smarty_Internal_Template $_smarty_tpl) {
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
