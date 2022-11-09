"use strict"
function buscar_chefs(){
	var d1, d2, d3, ajax, url, param, contenedor;
	contenedor= document.getElementById('chefs1');
	d1=document.formu.nombres.value;
	d2=document.formu.receta.value;
	d3=document.formu.foto.value;
	ajax=nuevoAjax();
	url="ajax_buscar_recetas.php"
	param="nombres"+d1+"&receta"+d2+"&foto"+d3;
	ajax.open("POST", url,true);
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			contenedor.innerHTML= ajax.responseText;
		}
	}
	ajax.send(param);
	

}