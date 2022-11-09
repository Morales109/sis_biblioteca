"use strict"
function validar(){
	var tipo_libro=document.formu.tipo_libro.value;
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(tipo_libro)){
		alert("El tipo de libro es incorrectos o estan vacios");
		document.formu.tipo_libro.focus();
		return;
	}
	/*if(autor==" "){
		alert("El campo autor esta vacío");
		document.formu.autor.focus();
		return;

	if(direccion==""){
		alert("la direccion esta vacía");
		document.formu.direccion.focus();
		return;

	}
	
		if(observacion==""){
		alert("El campo de observacion esta vacía");
		document.formu.observacion.focus();
		return;

	}
	/*
	alert("DATOS CORRECTOS\n"+"Nombres: "+nombre+"\n"+"Direccion:"+direccion);
	*/
	document.formu.submit();
}