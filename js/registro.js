
/* FUNCION PARA MOSTRAR EL FORMULARIO*/

function mostrarForm() {
    const divFormulario = document.getElementById("formulario");
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");
    const mensajesError = document.querySelectorAll("p.formulario_input-error");
    let registroSeleccionado = opcionRegistro.options[opcionRegistro.selectedIndex].value;
    mensajesError.forEach((element) =>{
        element.style.display="none";

    });
    /*AYUDA A QUE LOS FORMULARIOS TENGAN EL TAMAÑO ESTANDAR*/
    divFormulario.style.height = "100%";
    /*ELSE IF CUANDO SELECCIONA UN FORMULARIO SE OCULTAN LOS OTROS*/
    if (registroSeleccionado == "registroBarbero") {
        registroNegocio.style.display = "none";
        registroUsuario.style.display = "none";
        registroBarbero.style.display = "flex";
    } else if (registroSeleccionado == "registroNegocio") {
        registroBarbero.style.display = "none";
        registroUsuario.style.display = "none";
        registroNegocio.style.display = "flex";
    } else if (registroSeleccionado == "registroUsuario") {
        registroBarbero.style.display = "none";
        registroNegocio.style.display = "none";
        registroUsuario.style.display = "flex";
    }
    opcionRegistro.style.display = "none";
    btnRegistrarse.style.display = "none";
}

/* FUNCION PARA VOLVER Y OCULTAR EL FORMULARIO DE REGISTRO*/

function ocultarFormulario() {
    const divFormulario = document.getElementById("formulario");
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");
    divFormulario.style.height = "29rem";
    btnRegistrarse.style.display = "block";
    opcionRegistro.style.display = "block";
    registroBarbero.style.display = "none";
    registroNegocio.style.display = "none";
    registroUsuario.style.display = "none";

}
/*CESTA DE BASURA, ELIMINA LO ESCRITO EN EL CAMPO CONTRASEÑA*/

function borrar(index) {
    const contraseña = document.querySelectorAll("#contraseña");
    contraseña[index].value = "";
}

/* VER Y OCULTAR CONTRASEÑA*/

function pass(index) {
    const contraseña = document.querySelectorAll("#contraseña");
    const closeEye = document.querySelectorAll("#verContraseña");
    closeEye[index].src = "../img/closeEye.png";
    if (contraseña[index].getAttribute("type") == "password") {
        contraseña[index].setAttribute("type", "text");
    } else {
        contraseña[index].setAttribute("type", "password");
        closeEye[index].src = "../img/openEye.png";
    }
}
    /*VALIDACIONES CAMPOS DEL FORMULARIO*/

    const validaciones = {
        nombre: /^[a-zA-ZÀ-ÿ\s]{3,50}$/,
        apellido: /^[a-zA-ZÀ-ÿ\s]{3,50}$/,
        celular: /^\d{7,10}$/,
        correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z]{2,}$/,
        contraseña1: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/,
        contraseña2: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/,
    }
    /*nit:
    direccion: /^[Calle|Carrera|Diagonal]\\s\\d{2}\\s#\\d{2}-\\d{2}\\s[a-zA-Z\\s]+$,*/
    const campos = {
        nombre: false,
        apellido: false,
        celular: false,
        correo: false,
        contraseña1: false,
        contraseña2: false
        /*, nit: false,
        direccion: false
        */
    }
document.addEventListener('DOMContentLoaded', (event) => {
    const buttonregistrar = document.querySelectorAll('#btn-registar');
    const inputs = document.querySelectorAll('input.formulario_input');

    inputs.forEach((element) => {
        element.addEventListener('keyup', validarFormulario);
        element.addEventListener('blur', validarFormulario);
    });

    buttonregistrar.forEach((btnregistar) => {
        btnregistar.addEventListener('submit', (e) => {
            e.preventDefault();

            const terminos = document.getElementById('terminos');
            if (campos.nombre && campos.apellido && campos.celular && campos.correo && campos.contraseña && terminos.checked) {
                formulario.reset();

                document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
                setTimeout(() => {
                    document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
                }, 5000);

                document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                    icono.classList.remove('formulario__grupo-correcto');
                });
            } else {
                document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
            }
        })
    });


});


const validarCampo = (validaciones, input, campo) => {
    const mensajesError = document.querySelectorAll("p.formulario_input-error");
    if (validaciones.test(input.value)) {
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.remove('formulario_input-error-activo');
        campos[campo] = true;
    } else {
        mensajesError.forEach((element) =>{
            if(element.innerText.toLowerCase().includes(campo)){
                element.classList.add("formulario_input-error");
                element.style.display="block";
            }

        });
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.add('formulario_input-error-activo');
        campos[campo] = false;
    }
}

const validarFormulario = (e) => {
    var contraseña1, contraseña2;
    switch (e.target.name) {
        case "nombre":
            validarCampo(validaciones.nombre, e.target, 'nombre');
            break;
        case "apellido":
            validarCampo(validaciones.apellido, e.target, 'apellido');

            break;
        case "celular":
            validarCampo(validaciones.celular, e.target, 'celular');
            break;
        case "correo":
            validarCampo(validaciones.correo, e.target, 'correo');
            break;
        case "contraseña1":

            validarCampo(validaciones.contraseña1, e.target, 'contraseña');
            break;
        case "contraseña2":
            contraseña1 = e.target.value;

            contraseña2 = e.target.value;
            validarCampo(validaciones.contraseña2, e.target, 'contraseña');
            validarContraseña2(contraseña1,contraseña2);
            break;

        /* case "nit":
 
         break;
         case "direccion":
 
         break;*/
    }
}

const validarContraseña2 = (contraseña1, contraseña2) => {
    if (contraseña1 !== contraseña2) {
        console.log("Entre 0", contraseña1 === contraseña2);
        document.getElementById(`grupo_contraseña`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`grupo_contraseña`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#grupo_contraseña i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_contraseña i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_contraseña .formulario_input-error`).classList.add
            ('formulario_input-error-activo');
        campos['contraseña'] = false;
    } else {
        console.log("Entre 111")
        document.getElementById(`grupo_contraseña`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`grupo_contraseña`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#grupo_contraseña`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_contraseña i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_contraseña .formulario_input-error`).classList.remove('formulario_input-error-activo');
        campos['contraseña'] = true;
    }
}