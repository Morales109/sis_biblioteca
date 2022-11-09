"use strict"
function validar(){
	var nombre_biblioteca=document.formu.nombre_biblioteca.value;
	var ubicacion_biblioteca=document.formu.ubicacion_biblioteca.value;
	var telefono=document.formu.telefono.value;
	var correo=document.formu.correo.value;
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(nombre_biblioteca)){
		alert("El nombre es incorrecto o esta vacio");
		/*para poder posicionar el cursor en ese lugar*/
		document.formu.nombre_biblioteca.focus();
		/*para que retorne hasta que no cambie*/
		return;
	}
	/*para validar datos correctos en apellidos, datos correctos(letras y espacios en blanco)*/
	
	/*no validar a ubicacion como datos obligatorio
	if(ubicacion_biblioteca==""){
		alert(" La ubicacion es incorrecta");
		document.formu.ubicacion_biblioteca.focus();
		return;
	}*/
	
	/*validacion del telefono blanco*/
	if(telefono==""){
		alert(" el telefono esta vacio");
		document.formu.telefono.focus();
		return;
		
	}
	/*Datos obligatorios*/
	if(!v3.test(correo)){
		alert("el correo es incorrecto o esta vacío");
		document.formu.correo.focus();
		return;
	}
	
	document.formu.submit();
}





