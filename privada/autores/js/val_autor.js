"use strict" 
function validar(){
	var nombre_autor=document.formu.nombre_autor.value;
	var ape_paterno=document.formu.ape_paterno.value;
	var ape_materno=document.formu.ape_materno.value;
	var nacionalidad=document.formu.nacionalidad.value;
	
	if(nombre_autor==""){
		alert("Por favor ingrese nombre");
		document.formu.nombre_autor.focus();
		return;
	}
	if(!v1.test(ape_paterno)){
		alert("Los apellido paterno es incorrecto o el campo esta vacio");
		document.formu.ape_paterno.focus();
		return;
	}
	if((ape_paterno=="")&&(am_materno=="")){
		alert("Por favor introduzca un Apellido");
		document.formu.ape_paterno.focus();
		return;
	}
	if(nacionalidad==""){
		alert("Por favor ingrese nacionalidad");
		document.formu.nacionalidad.focus();
		return;
	}
	document.formu.submit();

}