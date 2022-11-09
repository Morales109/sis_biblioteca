"use strict"
function validar(){
	var fecha=document.formu.fecha.value;
	var observacion=document.formu.observacion.value;
	if(fecha==""){
		alert("la fecha esta vacía");
		document.formu.fecha.focus();
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