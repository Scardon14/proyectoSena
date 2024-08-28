/* function mostrarForm(){
    const elemento = document.getElementById("registro");
    var pagina = elemento.options[elemento.selectedIndex].value;
    pagina = pagina + ".html";
    loadHTML(pagina,"form");
    const btnRegistrarse=document.getElementById("registrarse");
    btnRegistrarse.style.display="none";
    const formulario = document.getElementById("form");
    formulario.style.display="block";
}

function loadHTML(url, targetElementId) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById(targetElementId).innerHTML = data;
        })
        .catch(error => console.error('Error loading the HTML:', error));
}
function ocultarFormulario(){
    const formulario = document.getElementById("form");
    formulario.style.display="none";
    const btnRegistrarse = document.getElementById("registrarse");
    btnRegistrarse.style.display="block";
} */
//JS para formulario unificado

function mostrarForm(){  
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");    
    let registroSeleccionado = opcionRegistro.options[opcionRegistro.selectedIndex].value;
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
function ocultarFormulario(){
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");
    btnRegistrarse.style.display="block";
    opcionRegistro.style.display="block";
    registroBarbero.style.display="none";
    registroNegocio.style.display="none";
    registroUsuario.style.display="none";

}
function borrar(index){
    const contraseña=document.querySelectorAll("#contraseña");
    contraseña[index].value="";kml,ñ
}

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


