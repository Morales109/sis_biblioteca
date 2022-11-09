"use strict"
function buscar_usuarios1(){
	var d1, d2, d3, d4, ajax, url, param, contenedor;
		contenedor= document.getElementById('usuarios1');
		d1= document.formu.ap.value;
		d2 =document.formu.nombre.value;
		d3 =document.formu.celular.value;
		d4 =document.formu.correo_usuario.value;
		ajax= nuevoAjax();
		url ="ajax_buscar_usuario1.php"
		param="ap="+d1+"&nombre="+d2+"&celular="+d3+"&correo_usuario="+d4;
		//alert(param);
		
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.onreadystatechange= function(){
			if(ajax.readyState == 4){
				contenedor.innerHTML=ajax.responseText;

			}
		}
		ajax.send(param);
}