"use strict"
function validar(){
	var fecha_reserva=document.formu.fecha_reserva.value;
	var observacion=document.formu.observacion.value;
	if(fecha_reserva==""){
		alert("la fecha de reserva esta vacía");
		document.formu.fecha_reserva.focus();
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