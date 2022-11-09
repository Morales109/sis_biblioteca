<?php
/* Smarty version 3.1.36, created on 2022-09-23 04:24:40
  from 'C:\wamp64\www\sis_biblioteca\privada\usuarios1\templates\usuario1_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d35089dad82_62624849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca7afd779bf92455b1c567e60f1d36471ba9458' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\usuarios1\\templates\\usuario1_nuevo.tpl',
      1 => 1657282129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d35089dad82_62624849 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/val_usuario1.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="formu_ingreso_datos">
			<form action="prestamo_libro_nuevo1.php" method="post" name="formu">
				<h2>REGISTRAR USUARIOS-ESTUDIANTES</h2>
				<p>
					<input type="text" name="id_tipo_libro"  placeholder="id tipo libro"> (*)
				<p>
				</p>
				}	<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();" class="boton2">
					<input type="button" value="Cancelar" onclick="javascript:location.href='prestamos_libros.php';" class="boton2">
				</p>
				<p><b>(*)Campos Obligatorios</b></p>
			</form>
		</div>

	</body>
</html><?php }
}
