<?php
/* Smarty version 3.1.36, created on 2022-10-09 05:58:21
  from 'C:\wamp\www\sis_biblioteca\privada\recetas\templates\ajax_buscar_recetas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634246ddae2f20_73154568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f644609f7c413283128585db918a7ce925c7ef76' => 
    array (
      0 => 'C:\\wamp\\www\\sis_biblioteca\\privada\\recetas\\templates\\ajax_buscar_recetas.tpl',
      1 => 1665285761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634246ddae2f20_73154568 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="UTF-8">
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar() {
			var d1, d2, d3, contenedor, ajax, url, param;
				contenedor = document.getElementById('recetas');

			d1 = document.formu.id_chef.value;
			d2= document.formu.receta.value;
			d3 = document.formu.foto.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_recetas.php";
			param="id_chef="+d1+"&receta="+d2+"&foto="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4){
					contenedor.innerHTML= ajax.responseText;
				}
			}
			ajax.send(param);
		}
		 
	<?php echo '</script'; ?>
>
</head>
<body>
	<!--BUSCADOR--->
	<div class="titulo_listado">
			<h1>RECETAS</h1>
		</div>
		<td align="right" width="33%">
				<form name="formNuevo" method="post" action="receta_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
		
			</td>
			<center>
			<form action="#" method="post" name="formu">
				<table border="1" class="listado">
					<tr>
						<th>
							<b>CHEF</b>
							<p>
							<select name="id_chef" onchange="buscar()">
							<option value="">---Seleccione--</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chefs']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_chef'];?>
" onclick="buscar();"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select> 
							</p>

						</th>
						<th>
							<b>Receta</b><br />
							<input type="text" name="receta" value="" size="20" onKeyUp="buscar()">
						</th>
						<th>
							<b>Foto</b><br />
							<input type="text" name="foto" value="" size="15" onKeyUp="buscar()">
						</th>
						</tr>
					</table>
				</form>
			</center>
						
						<!--BUSCADOR----->
						<div id="recetas">
						
			<!--LISTADO  RECETAS-->

		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>CHEF</th><th>RECETA</th><th>FOTO</th><th>FECHA REALIZACION</th>
					
				</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recetas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				
				<tr>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['foto'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_realizacion'];?>
</td>
					

					<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
				</table>
				
			</center>
</div>
	</body>
</html><?php }
}
