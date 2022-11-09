"use strict"
function validar(){
	var nombre_bib=document.formu.nombre_bib.value;
	var apellido_bib=document.formu.apellido_bib.value;
	var telefono_bib=document.formu.telefono_bib.value;
	var direccion_bib=document.formu.direccion_bib.value;
	var date_inicio=document.formu.date_inicio.value;
	var date_final=document.formu.date_final.value;
	
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(nombre_bib)){
		alert("los nombres son incorrectos o estan vacios");
		/*para poder posicionar el cursor en ese lugar*/
		document.formu.nombre_bib.focus();
		/*para que retorne hasta que no cambie*/
		return;
	}
	/*para validar datos correctos en apellidos, datos correctos(letras y espacios en blanco)*/
	
	/*VALIDAR como dato obligatorio y correcto(numeros enteros positivos)
	*/
	if(!v1.test(apellido_bib)){
		alert("Apellidos son incorrectos o estan vacios");
		document.formu.apellido_bib.focus();
		return;
	}
	/*if(telefono==""){
		alert(" el telefono esta vacio");
		document.formu.telefono.focus();
		return;
		
	}*/

	/*Valida datos correctos (letras y espacios)*/
	if(direccion_bib==""){
		alert("la direccion esta vacía");
		document.formu.direccion_bib.focus();
		return;

	}
	
	if(date_inicio==""){
		alert("fecha inicio esta vacía");
		document.formu.date_inicio.focus();
		return;
	}
	if(date_final==""){
		alert("la fecha final esta vacía");
		document.formu.date_final.focus();
		return;
	}
	if(date_inicio>=date_final){
		alert("fecha de inicio incorrecto");
		document.formu.date_inicio.focus();
		return;

	} 
	
	document.formu.submit();
}