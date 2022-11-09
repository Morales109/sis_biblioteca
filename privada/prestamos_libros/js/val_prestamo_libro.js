"use strict"
function validar(){
	
	var fecha_inicial=document.formu.fecha_inicial.value;
	var fecha_final=document.formu.fecha_final.value;
	var fecha_entrega=document.formu.fecha_entrega.value;
	var observacion_prestamo=document.formu.observacion_prestamo.value;
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	
	if(fecha_inicial==""){
		alert("la fecha inicio esta vacía");
		document.formu.fecha_inicial.focus();
		return;
	}
	if(fecha_final==""){
		alert("la fecha final establecida esta vacía");
		document.formu.fecha_final.focus();
		return;
	}
	if(fecha_entrega==""){
		alert("la fecha de entrega esta vacía");
		document.formu.fecha_entrega.focus();
		return;
	}
	
	
	
	/*if((fecha_entrega<fecha_inicial)&&(fecha_entrega)){
		if(fecha_entrega<fecha_inicial){
			alert("la fecha de entrega es incorrecta");
			document.formu.fecha_entrega.focus();
		return;
		}
	}
	if((fecha_final<fecha_entrega)&&(fecha_final<fecha_incial)){
		alert("la fecha final es incorrecto");
		document.formu.fecha_final.focus();
		return; 
		

	}*/
	if((fecha_inicial>fecha_final) && (fecha_inicial>fecha_entrega)){
		alert("la fecha inicial es incorrecto");
		document.formu.fecha_inicial.focus();
		return;
	}
	document.formu.submit();
}