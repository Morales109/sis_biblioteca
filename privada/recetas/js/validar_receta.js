"use strict"
function validar(){
	var id_chef=document.formu.id_chef.value;
	var receta=document.formu.receta.value;
	var foto=document.formu.foto.value;
if(id_chef==""){
	alert("Por favor seleccione un chef");
	document.formu.id_chef.focus();
	return;
}
if(receta==""){
	alert("Por favor ingrese una receta");
	document.formu.receta.focus();
	return;
}
if(foto==""){
	alert("Por favor subir una foto");
	document.formu.foto.focus();
	return;
}
	document.formu.submit();
}