
/* FUNCION PARA MOSTRAR EL FORMULARIO*/

function mostrarForm(){  
    const divFormulario = document.getElementById("formulario");
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");    
    let registroSeleccionado = opcionRegistro.options[opcionRegistro.selectedIndex].value;

/*AYUDA A QUE LOS FORMULARIOS TENGAN EL TAMAÑO ESTANDAR*/
    divFormulario.style.height = "100%";
/*ELSE IF CUANDO SELECCIONA UN FORMULARIO SE OCULTAN LOS OTROS*/
    if (registroSeleccionado=="registroBarbero"){
        registroNegocio.style.display="none";
        registroUsuario.style.display="none";
        registroBarbero.style.display="flex";
    }else if(registroSeleccionado=="registroNegocio"){
        registroBarbero.style.display="none";
        registroUsuario.style.display="none";
        registroNegocio.style.display="flex";
    } else if(registroSeleccionado=="registroUsuario"){
        registroBarbero.style.display="none";
        registroNegocio.style.display="none";
        registroUsuario.style.display="flex";
    }
    opcionRegistro.style.display="none";
    btnRegistrarse.style.display="none";
}

/* FUNCION PARA VOLVER Y OCULTAR EL FORMULARIO DE REGISTRO*/

function ocultarFormulario(){
    const divFormulario = document.getElementById("formulario");
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");
    divFormulario.style.height = "29rem";
    btnRegistrarse.style.display="block";
    opcionRegistro.style.display="block";
    registroBarbero.style.display="none";
    registroNegocio.style.display="none";
    registroUsuario.style.display="none";

}
/*CESTA DE BASURA, ELIMINA LO ESCRITO EN EL CAMPO CONTRASEÑA*/

function borrar(index){
    const contraseña=document.querySelectorAll("#contraseña");
    contraseña[index].value="";
}

/* VER Y OCULTAR CONTRASEÑA*/

function pass(index){
    const contraseña=document.querySelectorAll("#contraseña");
    const closeEye=document.querySelectorAll("#verContraseña");
    closeEye[index].src="../img/closeEye.png";
    if(contraseña[index].getAttribute("type") == "password"){
        contraseña[index].setAttribute("type","text");
    } else {
        contraseña[index].setAttribute("type","password");
        closeEye[index].src="../img/openEye.png";
    }
}


