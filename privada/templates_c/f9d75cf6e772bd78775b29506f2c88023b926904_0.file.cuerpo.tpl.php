<?php
/* Smarty version 3.1.36, created on 2022-09-23 03:56:49
  from 'C:\wamp64\www\sis_biblioteca\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d2e81e09531_96893035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d75cf6e772bd78775b29506f2c88023b926904' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\templates\\cuerpo.tpl',
      1 => 1650200126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d2e81e09531_96893035 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
</head>
<body>
<form action="claves/" method="post" target="cuerpo">
	<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
	<div class="formu_ingreso">
	<p><h2>Ingresar al Sistema</h2></p>
	<p><h2>Login:</h2><input type="text" name="nick" size="11" value="" class="limpiar"></p>
	<p><h2>Clave:</h2><input type="password" name="password" size="11" value="" ></p>
	<input type="submit" name="accion" value="Ingresar" size="5" class="boton">
	</div>
	<?php }?>
	</form>
</body>
</html><?php }
}
