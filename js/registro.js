
/* FUNCION PARA MOSTRAR EL FORMULARIO*/
function mostrarForm() {
    const divFormulario = document.getElementById("formulario");
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");
    const mensajesError = document.querySelectorAll("p.formulario_input-error");
    const checkInput = document.querySelectorAll(`i.formulario_validacion-estado`)
    let registroSeleccionado = opcionRegistro.options[opcionRegistro.selectedIndex].value;
    mensajesError.forEach((element) => {
        element.classList.add("ocultarDiv");
    });
    checkInput.forEach((element) => {
        element.style.display = "none";

    });

    /*AYUDA A QUE LOS FORMULARIOS TENGAN EL TAMAÑO ESTANDAR*/
    /*ELSE IF CUANDO SELECCIONA UN FORMULARIO SE OCULTAN LOS OTROS*/
    if (registroSeleccionado == "registroBarbero") {
        registroNegocio.classList.add("ocultarDiv");
        registroUsuario.classList.add("ocultarDiv");
        registroBarbero.classList.remove("ocultarDiv");
    } else if (registroSeleccionado == "registroNegocio") {
        registroBarbero.classList.add("ocultarDiv");
        registroUsuario.classList.add("ocultarDiv");
        registroNegocio.classList.remove("ocultarDiv");
    } else if (registroSeleccionado == "registroUsuario") {
        registroBarbero.classList.add("ocultarDiv");
        registroNegocio.classList.add("ocultarDiv");
        registroUsuario.classList.remove("ocultarDiv");
    }
    opcionRegistro.classList.add("ocultarDiv");
    btnRegistrarse.classList.add("ocultarDiv");
}
/* FUNCION PARA VOLVER Y OCULTAR EL FORMULARIO DE REGISTRO*/

function ocultarFormulario() {
    const divFormulario = document.getElementById("formulario");
    const btnRegistrarse = document.getElementById("registrarse");
    const registroBarbero = document.getElementById("registroBarbero");
    const registroNegocio = document.getElementById("registroNegocio");
    const registroUsuario = document.getElementById("registroUsuario");
    const opcionRegistro = document.getElementById("opcionRegistro");
    btnRegistrarse.classList.remove("ocultarDiv");
    opcionRegistro.classList.remove("ocultarDiv");
    registroBarbero.classList.add("ocultarDiv");
    registroNegocio.classList.add("ocultarDiv");
    registroUsuario.classList.add("ocultarDiv");

}

/* VOLVER AL INDEX.HTML*/
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('btnVolver').addEventListener('click', function () {
        const registroBarbero = document.getElementById("registroBarbero");
        const registroNegocio = document.getElementById("registroNegocio");
        const registroUsuario = document.getElementById("registroUsuario");
        if (registroBarbero.className.includes("ocultarDiv")
            && registroNegocio.className.includes("ocultarDiv")
            && registroUsuario.className.includes("ocultarDiv")) {
            window.location.href = 'index.php'
        } else {
            ocultarFormulario();
        }
    });
});

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
    nit: /^\d{5,9}$/,
    direccion: /^(Calle|Carrera|Avenida|Diagonal|Transversal)\s\d{1,3}[A-Z]?\s?#\s?\d{1,3}[A-Z]?\-\d{1,3}$/,
    terminos: 'true'
}
const campos = {
    nombre: false,
    apellido: false,
    celular: false,
    correo: false,
    contraseña1: false,
    contraseña2: false,
    nit: false,
    direccion: false
}
document.addEventListener('DOMContentLoaded', (event) => {
    const buttonregistrar = document.querySelectorAll('#btn-registar');
    const inputs = document.querySelectorAll('input.formulario_input');
    const checkbox = document.querySelectorAll('input.formulario_checkbox');

    inputs.forEach((element) => {
        element.addEventListener('keyup', validarFormulario);
        element.addEventListener('blur', validarFormulario);
    });
    checkbox.forEach((element) => {
        element.addEventListener('click', validarFormulario);
        //element.addEventListener('blur', validarFormulario);
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

//Variables que capturas contraseña uno y dos
var contraseña1, contraseña2;
//Metodo que invoca los eventos para destribuir las validaciones
const validarFormulario = (e) => {
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
            contraseña1 = e.target.value;
            validarCampo(validaciones.contraseña1, e.target, 'contraseña');
            break;
        case "contraseña2":
            contraseña2 = e.target.value;
            validarContraseña2(contraseña1, contraseña2);
            break;
        case "nit":
            validarCampo(validaciones.nit, e.target, 'nit');
            break;
        case "direccion":
            validarCampo(validaciones.direccion, e.target, 'dirección');
            break;
        case "terminos":
            validarCampo(validaciones.terminos, e.target, 'terminos');
            break;
    }
}
//Metodo que valida si los campos cumplen con las validaciones
const validarCampo = (validaciones, input, campo) => {
    const opcionRegistro = document.getElementById("opcionRegistro");
    let registroSeleccionado = opcionRegistro.options[opcionRegistro.selectedIndex].value;
    const mensajesError = document.querySelectorAll(`#grupo_${campo} p`);
    //Verifica los terminos y condiciones ya que no se puede obtener el valor del campo
    if (campo === "terminos") {
        var index = validacionInputExitosa(true, registroSeleccionado, campo);
        if (input.checked) {
            var index = validacionInputExitosa(true, registroSeleccionado, campo);
            if (mensajesError[index].innerText.toLowerCase().includes(campo)) {
                validarMensajeError(true, index, campo);
            }
        } else {
            var index = validacionInputExitosa(false, registroSeleccionado, campo);
            if (mensajesError[index].innerText.toLowerCase().includes(campo)) {
                validarMensajeError(false, index, campo);
            }
        }
        //Valida que los campos que tienen datos de entrada cumplan con las validaciones
    } else if (validaciones.test(input.value)) {
        var index = validacionInputExitosa(true, registroSeleccionado, campo);
        //Permite hacer las validaciones de la contraseña 1 de los 3 formularios
        if (campo.includes("contraseña")) {
            var index = validacionInputExitosa(true, registroSeleccionado, campo);
            if (mensajesError[index].innerText.toLowerCase().includes(campo)) {
                validarMensajeError(true, index, campo);
            }
            //Valida todos los demás campos del formulario
        } else if (mensajesError[index].innerText.toLowerCase().includes(campo)) {
            validarMensajeError(true, index, campo);
        }
        campos[campo] = true;
        //Se activa cuando los campos no cumplen con las validaciones
    } else {
        var index = validacionInputExitosa(false, registroSeleccionado, campo);
        if (campo.includes("contraseña")) {
            if (mensajesError[index].innerText.toLowerCase().includes(campo)) {
                validarMensajeError(false, index, campo);
            }
        } else if (mensajesError[index].innerText.toLowerCase().includes(campo)) {
            validarMensajeError(false, index, campo);
        }
        campos[campo] = false;
    }
}

//Variable que captura la posicion de las contraseñas 2 en el arreglo
var aux;
const validacionInputExitosa = (validacion, posicion, campo) => {
    if (posicion.toLowerCase() === "registroUsuario".toLocaleLowerCase()) {
        cambiarEstadoValidacion(validacion, 0, campo);
        aux = 1;
        return 0;
    } else if (posicion.toLowerCase() === "registroBarbero".toLocaleLowerCase()) {
        aux = 3;
        if (campo.includes("contraseña")) {
            cambiarEstadoValidacion(validacion, 2, campo);
            return 2;
        } else {
            cambiarEstadoValidacion(validacion, 1, campo);
            return 1;
        }
    } else if (posicion.toLowerCase() === "registroNegocio".toLocaleLowerCase()) {
        aux = 5;
        if (campo === "nit") {
            cambiarEstadoValidacion(validacion, 0, campo);
            return 0;
        } else if (campo === "dirección") {
            cambiarEstadoValidacion(validacion, 0, campo);
            return 0;
        } else if (campo === "contraseña") {
            cambiarEstadoValidacion(validacion, 4, campo);
            return 4;
        } else {
            cambiarEstadoValidacion(validacion, 2, campo);
            return 2;
        }
    }
}

//Metodo muestra iconos exitosos y oculta los mensajes de error
const cambiarEstadoValidacion = (validacion, index, campo) => {
    const mensajesError = document.querySelectorAll(`#grupo_${campo} p`);
    const checkInput = document.querySelectorAll(`#grupo_${campo} i`);
    const contendorInput = document.querySelectorAll(`#grupo_${campo}`);
    if (validacion === true) {
        if (campo.includes("terminos")) {

        } else {
            contendorInput[index].classList.remove('formulario_grupo-incorrecto');
            contendorInput[index].classList.add('formulario_grupo-correcto');
            checkInput[index].classList.add('fa-check-circle');
            checkInput[index].classList.remove('fa-times-circle');
            mensajesError[index].classList.remove('formulario_input-error-activo');
        }

    } else {
        contendorInput[index].classList.add('formulario_grupo-incorrecto');
        contendorInput[index].classList.remove('formulario_grupo-correcto');
        checkInput[index].classList.remove('fa-check-circle');
        checkInput[index].classList.add('fa-times-circle');
        mensajesError[index].classList.add('formulario_input-error-activo');
    }

}

//Muestra los mensajes e iconos de error
const validarMensajeError = (estado, index, campo) => {
    const mensajesError = document.querySelectorAll(`#grupo_${campo} p`);
    const checkInput = document.querySelectorAll(`#grupo_${campo} i`);
    if (estado) {
        mensajesError[index].classList.add("formulario_input-error");
        mensajesError[index].classList.add("ocultarDiv");
        checkInput[index].style.display = "inline";
    } else {
        mensajesError[index].classList.add("formulario_input-error");
        mensajesError[index].classList.remove("ocultarDiv");
        checkInput[index].style.display = "inline";
    }
}

//Valida la contraseña  uno y la contraseña dos en los 3 formularios
const validarContraseña2 = (contraseña1, contraseña2) => {
    const mensajesError = document.querySelectorAll(`#grupo_contraseña p`);
    const checkInput = document.querySelectorAll(`#grupo_contraseña i`);
    const contraseña = document.querySelectorAll(`#grupo_contraseña`);
    mensajesError[aux].classList.remove("ocultarDiv");
    if (contraseña1 !== contraseña2) {
        checkInput[aux].style.display = "inline";
        contraseña[aux].classList.add('formulario_grupo-incorrecto');
        contraseña[aux].classList.remove('formulario_grupo-correcto');
        checkInput[aux].classList.add('fa-times-circle');
        checkInput[aux].classList.remove('fa-check-circle');
        mensajesError[aux].classList.add
            ('formulario_input-error-activo');
        campos['contraseña'] = false;
    } else {
        checkInput[aux].style.display = "inline";
        contraseña[aux].classList.remove('formulario_grupo-incorrecto');
        contraseña[aux].classList.add('formulario_grupo-correcto');
        checkInput[aux].classList.remove('fa-times-circle');
        checkInput[aux].classList.add('fa-check-circle');
        mensajesError[aux].classList.add("ocultarDiv");
        mensajesError[aux].classList.remove('formulario_input-error-activo');
        campos['contraseña'] = true;
    }
}