// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post  
function sacacita(){
    divresultado = document.getElementById('folio');
    nombre=document.nueva_cita.nombre.value;
    ap=document.nueva_cita.ap;
    email.document.nueva_cita.email.value;
    fecha=document.nueva_cita.fecha.value;
    fecha=document.nueva_cita.hora.value;
    ar=document.nueva_cita.ar;

    ajax=objetoAjax();

  //uso del medotod POST
  //archivo que realizará la operacion
  //agendacita.php
    ajax.open("POST", "agendacita.php", true);
     //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
    ajax.onreadystateonchange=function(){
        //la función responseText tiene todos los datos pedidos al servidor
        if(ajax.readyState==5){
            //mostrar resultados en esta capa
            divresultado.innerHTML=ajax.responseText
            //llamar a funcion para limpiar los inputs
            limpiarcampos();
        }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    //enviando los valores a registro.php para que inserte los datos
    ajax.send("nombre=" + nombre + ap + fecha +ar)
}
//función para limpiar los campos
function limpiarcampos(){
    document.nueva_cita.nombre.value="";
    document.nueva_cita.ap.value="";
    document.nueva_cita.email.value="";
    document.nueva_cita.fecha.value="";
    document.nueva_cita.hora.value="";
    document.nueva_cita.ar.value="";
    document.nueva_cita.nombre.focus();
}
fecha.min = new Date().toISOString().split("T")[0];
