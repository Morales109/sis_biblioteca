<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
		<!--modificar para busqueda de datos---->
		 <script type="text/javascript" src="../../ajax.js"></script>
 		 <script type="text/javascript" src="js/buscar_usuarios1.js"></script>
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
				{assign var="b" value="0"}
				{assign var="total" value="`$pagina-1`"}
				{assign var="a" value="`$numreg*$total`"}
				{assign var="b" value="`$b+1+$a`"}
				{foreach item=r from=$usuarios1}
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.ap} {$r.am}</td>
					<td align="center">{$r.celular}</td>
					
					<td align="center">{$r.ci_usuario}</td>
					<td align="center">{$r.correo_usuario}</td>
					<td align="center">
						<form name="formModif{$r.id_usuario1}" method="post" action="usuario1_modificar.php">
    					<input type="hidden" name="id_usuario1" value="{$r.id_usuario1}">
   						<a href="javascript:document.formModif{$r.id_usuario1}.submit();" title="Modificar Usuario1 Sistema">
    					Modificar>>
							</a>							
						</form>
					</td>
					<td align="center">
						<form name="formElimi{$r.id_usuario1}" method="post" action="usuario1_eliminar.php">
							<input type="hidden" name="id_usuario1" value="{$r.id_usuario1}">
							<a href="javascript:document.formElimi{$r.id_usuario1}.submit();" title="Eliminar usuario1 Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a usuario-estudiante..?')); location.href='usuario1_eliminar.php'">
								Eliminar>>>
							</a>
						</form>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
			</table>


			<table>
				<tr align="center">
					<td>
						{if !empty($urlback)}
						<a onclick="location.href='{$urlback}'" style="font-family: Verdana; font-size: 9px; cursor: pointer";>&laquo; Anterior</a>
						{/if}
						{if !empty($paginas)}
							{foreach from=$paginas item=pag}
								{if $pag.npag== $pagina}
									{if $pagina neq '1'}|{/if} <b style="color:#7D6608; font-size: 12px;"> {$pag.npag}</b>
									{else}
									|<a onclick="location.href='{$pag.pagV}'" style="cursor: pointer;">{$pag.npag}</a>
									{/if}
									{/foreach}
									{/if}
									{if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
									| <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size: 9px; cursor: pointer;">Siguiente&raquo;</a>
	
									{/if}
					</td>					
				</tr>
			</table>
		</center>
</body>
</html>