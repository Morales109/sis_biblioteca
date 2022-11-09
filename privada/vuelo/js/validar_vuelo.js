"use strict"
function validar(){
	var id_hotel=document.formu.id_hotel.value;
	var origen=document.formu.origen.value;
	var destino=document.formu.destino.value;
	var fecha=document.formu.fecha.value;
	var horas=document.formu.horas.value;
if(id_hotel==""){
	alert("Por favor seleccione hotel");
	document.formu.id_hotel.focus();
	return;
}
if(origen==""){
	alert("Por favor ingrese una origen");
	document.formu.origen.focus();
	return;
}
if(destino==""){
	alert("Por favor subir una destino");
	document.formu.destino.focus();
	return;
}
if(fecha==""){
	alert("Por favor colocar fecha");
	document.formu.fecha.focus();
	return;
}
if(horas==""){
	alert("Por favor insertar hora");
	document.formu.horas.focus();
	return;
}
	document.formu.submit();
}