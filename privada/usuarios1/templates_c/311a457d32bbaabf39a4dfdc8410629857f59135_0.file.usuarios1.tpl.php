<?php
/* Smarty version 3.1.36, created on 2022-09-23 04:24:38
  from 'C:\wamp64\www\sis_biblioteca\privada\usuarios1\templates\usuarios1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632d3506b05d49_52216165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '311a457d32bbaabf39a4dfdc8410629857f59135' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_biblioteca\\privada\\usuarios1\\templates\\usuarios1.tpl',
      1 => 1660300991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632d3506b05d49_52216165 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
		<!--modificar para busqueda de datos---->
		 <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
 		 <?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_usuarios1.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				USUARIOS_ESTUDIANTES
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="usuario1_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>

		<!--------------INSERTAR EL INICIO DE BUSCADOR------->
		  <center>
		    <form action="#" method="post" name="formu">
		      <table border="1" class="listado">
		      <tr>
		        <th>
		          <b>Apellidos</b><br />
		          <input type="text" name="ap" value="" size="10" onkeyup="buscar_usuarios1()">
		        </th>
		        <th>
		          <b>Nombres</b><br/>
		          <input type="text" name="nombre" value="" size="10" onkeyup="buscar_usuarios1()">
		        </th>
		        <th>
		          <b>Celular</b><br/>
		          <input type="text" name="celular" value="" size="10" onkeyup="buscar_usuarios1()">
		        </th>
		        <th>
		          <b>Correo electronico</b><br/>
		          <input type="text" name="correo_usuario" value="" size="30" onkeyup="buscar_usuarios1()">
		        </th>
		      </tr>
		    </table>
		    </form>
		  </center>
  <!----------------FIN BUSCADOR--------------->

		<center>
		<!--inserta un id para usuarios--->
		<div id="usuarios1">
			<table class="listado">
				<tr>
					<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>CELULAR</th><th>CI</th><th>CORREO</th>
					<th><img src="../../imagenes/modificar2.png" width= "20%"></th><th><img src="../../imagenes/eliminar2.jpg" width="20%"></th>
				</tr>
				<?php $_smarty_tpl->_assignInScope('b', "0");?>
				<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
				<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<tr>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['celular'];?>
</td>
					
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['ci_usuario'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['correo_usuario'];?>
</td>
					<td align="center">
						<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario1'];?>
" method="post" action="usuario1_modificar.php">
    					<input type="hidden" name="id_usuario1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario1'];?>
">
   						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario1'];?>
.submit();" title="Modificar Usuario1 Sistema">
    					Modificar>>
							</a>							
						</form>
					</td>
					<td align="center">
						<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario1'];?>
" method="post" action="usuario1_eliminar.php">
							<input type="hidden" name="id_usuario1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario1'];?>
">
							<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario1'];?>
.submit();" title="Eliminar usuario1 Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a usuario-estudiante..?')); location.href='usuario1_eliminar.php'">
								Eliminar>>>
							</a>
						</form>
					</td>
					<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			</table>


			<table>
				<tr align="center">
					<td>
						<?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
						<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana; font-size: 9px; cursor: pointer";>&laquo; Anterior</a>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>|<?php }?> <b style="color:#7D6608; font-size: 12px;"> <?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
									<?php } else { ?>
									|<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
									<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
									| <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana; font-size: 9px; cursor: pointer;">Siguiente&raquo;</a>
	
									<?php }?>
					</td>					
				</tr>
			</table>
		</center>
</body>
</html><?php }
}
