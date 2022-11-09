"use strict"
function validar(){
	var nombre=document.formu.nombre.value;
	var ap=document.formu.ap.value;
	var am=document.formu.am.value;
	var celular=document.formu.celular.value;
	var ci_usuario=document.formu.ci_usuario.value;
	var correo_usuario=document.formu.correo_usuario.value;

	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(nombre)){
		alert("nombre es incorrecto o esta vacio");
		document.formu.nombre.focus();
		return;
	}
	/*para validar datos correctos en apellidos, datos correctos(letras y espacios en blanco)*/
	if(!v1.test(ap)){
		alert("los apellidos son incorrectos o estan vacios");
		document.formu.ap.focus();
		return;
	}
	/*if(apellidos!=""){
		if(!v1.test(apellidos)){
		alert(" Los apellidos son incorrecto");
		document.formu.apellidos.focus();
		return;
		}
	}
	*/
	/*if(celular==""){
		if(!v1.test(celular)){
		alert(" El celular es incorrecto");
		document.formu.celular.focus();
		return;
		}
	}*/
	/*Valida datos correctos (letras y espacios)*/
	if(celular==""){
		alert("el celular esta vacío");
		document.formu.celular.focus();
		return;
	}
	if(ci_usuario==""){
		alert("La cedula de identidda es incorrecto o esta vacio");
		document.formu.ci_usuario.focus();
		return;
	}
	if(!v3.test(correo_usuario)){
		alert("el correo es incorrecto o esta vacío");
		document.formu.correo_usuario.focus();
		return;
	}
	
	document.formu.submit();
}