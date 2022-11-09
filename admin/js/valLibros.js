"use strict"
function validar(){
	var titulo=document.formu.titulo.value;
	var ubicacion=document.formu.ubicacion.value;
	var num_disponibles=document.formu.num_disponibles.value;
	var num_ejemplares=document.formu.num_ejemplares.value;
	var num_inventario=document.formu.num_inventario.value;
	var observacion=document.formu.observacion.value;
	/*para validar como dato obligatorio y dato correcto (letras y espacios en blanco)*/
	if(!v1.test(titulo)){
		alert("campo del titulo es incorrecto o estan vacio");
		document.formu.titulo.focus();
		return;
	}
	if(ubicacion==""){
		alert(" la ubicación esta en blanco");
		document.formu.ubicacion.focus();
		return;
		}
	if(num_disponibles!=""){
		if(!v2.test(num_disponibles)){
		alert(" El numero disponibles es incorrecto");
		document.formu.num_disponibles.focus();
		return;
		}
	}
	if(num_ejemplares!=""){
		if(!v2.test(num_ejemplares)){
		alert(" El numero ejemplares es incorrecto");
		document.formu.num_ejemplares.focus();
		return;
		}
	}
	if(num_inventario==""){
		
		alert(" El numero de inventario esta vacio");
		document.formu.num_inventario.focus();
		return;
		
	}
	/*no es necesario que sea obligatorio modificado esta parte
	if(observacion==""){
		alert(" la observacion esta en blanco");
		document.formu.observacion.focus();
		return;
		}
	alert("DATOS CORRECTOS\n"+"Titulo: "+titulo+"\n"+"Ubicación:"+ubicacion+"\n"+"Nº inventario:"+num_inventario);*/
	document.formu.submit();
}