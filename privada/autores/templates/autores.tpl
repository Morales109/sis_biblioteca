<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../{$direc_css}" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				AUTORES
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="autor_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>
		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>NOMBRES</th><th>AP</th><th>AM</th><th>NACIONALIDAD</th>
					<th><img src="../../imagenes/modificar2.png" width= "20%"></th><th><img src="../../imagenes/eliminar2.jpg" width="20%"></th>
				</tr>
				{assign var="b" value="0"}
				{assign var="total" value="`$pagina-1`"}
				{assign var="a" value="`$numreg*$total`"}
				{assign var="b" value="`$b+1+$a`"}
				{foreach item=r from=$autores}
				<tr>
					<td align="center">{$b}</td>
					<td>{$r.nombre_autor}</td>
					<td>{$r.ape_paterno}</td>
					<td align="center">{$r.ape_materno}</td>
					<td align="center">{$r.nacionalidad}</td>
					<td align="center">
						<!---cambiar esta parte-->
						<form name="formModif{$r.id_autor}" method="post" action="autor_modificar.php">
    					<input type="hidden" name="id_autor" value="{$r.id_autor}">
    					<a href="javascript:document.formModif{$r.id_autor}.submit();" title="Modificar Autor Sistema">
    						Modificar>>>
							</a>							
						</form>
					</td>
					<td align="center">
						<form name="formElimi($r.id_autor)" method="post" action="autor_eliminar.php">
							<input type="hidden" name="id_autor" value="{$r.id_autor}">
							<a href="javascript:document.formElimi{$r.id_autor}.submit();" title="Eliminar Autor Sistema" onclick="javascript:return(confirm(' Desea realmente eliminar a el autor..?')); location.href='autor_eliminar.php'">
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
									| <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size: 9px; cursor: pointer">Siguinte&raquo;</a>
	
									{/if}
					</td>					
				</tr>
			</table>
		</center>
</body>
</html>