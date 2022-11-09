"use strict"
function validar(){
	var nombres=document.formu.nombres.value;
	var apellidos=document.formu.apellidos.value;
	var celular=document.formu.celular.value;
	var direccion=document.formu.direccion.value;
	var cedula=document.formu.cedula.value;
	var e_mail=document.formu.e_mail.value;

	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(nombres)){
		alert("los nombres son incorrectos o estan vacios");
		document.formu.nombres.focus();
		return;
	}
	/*para validar datos correctos en apellidos, datos correctos(letras y espacios en blanco)*/
	if(!v1.test(apellidos)){
		alert("los apellidos son incorrectos o estan vacios");
		document.formu.apellidos.focus();
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
	if(direccion==""){
		alert("la direccion esta vacía");
		document.formu.direccion.focus();
		return;
	}
	if(cedula==""){
		alert("La cedula es incorrecto o esta vacio");
		document.formu.cedula.focus();
		return;
	}
	if(!v3.test(e_mail)){
		alert("el e-mail es incorrecto o esta vacío");
		document.formu.e_mail.focus();
		return;
	}
	
	document.formu.submit();
}