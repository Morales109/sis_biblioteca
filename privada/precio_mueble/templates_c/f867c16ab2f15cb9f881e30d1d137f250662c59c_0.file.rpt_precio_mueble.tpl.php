<?php
/* Smarty version 3.1.36, created on 2022-10-09 06:35:34
  from 'C:\wamp\www\sis_biblioteca\privada\precio_mueble\templates\rpt_precio_mueble.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63424f96123836_27644131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f867c16ab2f15cb9f881e30d1d137f250662c59c' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\precio_mueble\\templates\\rpt_precio_mueble.tpl',
      1 => 1665290130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63424f96123836_27644131 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="UTF-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar() {
			id_mueble= document.formu.id_mueble.value;
			if(document.formu.id_mueble.value ==""){
				alert("Por favor seleccione el mueble");
				document.formu.id_mueble.focus();
				return;
			}
			ventanaCalendario =window.open("rpt_precio_mueble1.php?id_mueble=" +id_mueble , "calendario", "width=600, height=500, left=100, scrollbars=yes, menubars=no, statusbar=NO, status=NO, resizable=YES, location=NO")
		}
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PRECIOS MUEBLES </h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione mueble</b>
				<select name="id_mueble">
					<option value="">-Seleccione--</option>
					<option value="T">-Todos--</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['muebles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_mueble'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 </option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton">
			</p>
		</form>
	</div>
</body>
</html><?php }
}
