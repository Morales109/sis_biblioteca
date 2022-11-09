"use strict" 
function validar(){
	var tipo_libro=document.formu.tipo_libro.value;
	
	if(tipo_libro==""){
		alert("Por favor ingrese el tipo del libro");
		document.formu.ci.focus();
		return;
	}
	
	document.formu.submit();

}