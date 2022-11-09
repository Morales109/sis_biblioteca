"use strict"
function validar(){
	var nombre_biblioteca=document.formu.nombre_biblioteca.value;
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(nombre_biblioteca==""){
		alert("El nombre esta vacio");
		document.formu.nombre_biblioteca.focus();
		return;
	}
	document.formu.submit();
}