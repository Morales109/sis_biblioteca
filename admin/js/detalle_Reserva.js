"use strict"
function validar(){
	/*var num_inventario=document.formu.num_inventario.value;
	var ci_usuario=document.formu.ci_usuario.value;
	var ape_bibliotecario=document.formu.ape_bibliotecario.value;
	var fecha=document.formu.fecha.value;
	var descripcion=document.formu.descripcion.value;*/
	var num_reservados=document.formu.num_reservados.value;
	
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	/*if(num_inventario==" "){
		alert("numero del inventario vacio");
		document.formu.fecha.focus();
		return;
	}
	if(ci_usuario==""){
		alert("El C.I. del usuario esta vacío");
		document.formu.ci_usuario.focus();
		return;

	}	
	if(!v1.test(ape_bibliotecario)){
		alert("El apellido del bibliotecario esta vacio");
		document.formu.ape_bibliotecario.focus();
		return;
	}



	/*
	if(ape_bibliotecario==" "){
		alert("El apellido del bibliotecario esta vacio");
		document.formu.ape_bibliotecario.focus();
		return;
	}*/
	if(num_reservados==""){
		alert("Numero de reservas esta vacío");
		document.formu.num_reservados.focus();
		return;

	}
	/*if(fecha==" "){
		alert("la fecha esta vacía");
		document.formu.fecha.focus();
		return;
	}
		if(descripcion==""){
		alert("El campo descripcion esta vacía");
		document.formu.descripcion.focus();
		return;

	}
	/*
	alert("DATOS CORRECTOS\n"+"Nombres: "+nombre+"\n"+"Direccion:"+direccion);
	*/
	document.formu.submit();
}