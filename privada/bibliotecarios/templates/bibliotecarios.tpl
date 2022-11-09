<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				BIBLIOTECARIOS
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="bibliotecario_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>
		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>DIRECCION</th><th>FECHA INICIO</th><th>FECHA FINAL</th>
					<th><img src="../../imagenes/modificar2.png" width= "20%"></th><th><img src="../../imagenes/eliminar2.jpg" width="20%"></th>
				</tr>
				{assign var="b" value="0"}
				{assign var="total" value="`$pagina-1`"}
				{assign var="a" value="`$numreg*$total`"}
				{assign var="b" value="`$b+1+$a`"}
				{foreach item=r from=$bibliotecarios}
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.nombre_bib}</td>
					<td>{$r.apellido_bib}</td>
					<td align="center">{$r.direccion_bib}</td>
					<td align="center">{$r.date_inicio}</td>
					<td align="center">{$r.date_final}</td>
						
					
					
					<td align="center">
						<!---cambiar esta parte-->
						<form name="formModif{$r.id_bibliotecario}" method="post" action="bibliotecario_modificar.php">
    					<input type="hidden" name="id_bibliotecario" value="{$r.id_bibliotecario}">
    					<a href="javascript:document.formModif{$r.id_bibliotecario}.submit();" title="Modificar Bibliotecario Sistema">
    						Modificar>>>




							</a>							
						</form>
					</td>
					<td align="center">
						<form name="formElimi($r.id_bibliotecario)" method="post" action="bibliotecario_eliminar.php">
							<input type="hidden" name="id_bibliotecario" value="{$r.id_bibliotecario}">
							<a href="javascript:document.formElimi{$r.id_bibliotecario}.submit();" title="Eliminar Bibliotecario Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a Bibliotecario?')); location.href='bibliotecario_eliminar.php'">
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
									{if $pagina neq '1'}|{/if} <b style="color:#7D6608 ; font-size: 12px;"> {$pag.npag}</b>
									{else}
									|<a onclick="location.href='{$pag.pagV}'" style="cursor: pointer;">{$pag.npag}</a>
									{/if}
									{/foreach}
									{/if}
									{if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
									| <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size: 9px; cursor: pointer">Siguinte&raquo;</a>
	
									{/if}
					</td>					
				</tr>
			</table>
		</center>
</body>
</html>