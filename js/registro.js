
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
        element.style.display = "none";
    });
    checkInput.forEach((element) => {
        element.style.display = "none";

    });
    //console.log("Check: ",checkInput.length)

    /*AYUDA A QUE LOS FORMULARIOS TENGAN EL TAMAÑO ESTANDAR*/
    divFormulario.style.height = "100%";
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
    divFormulario.style.height = "29rem";
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
        console.log("algo")
        const registroNegocio = document.getElementById("registroNegocio");
        const registroUsuario = document.getElementById("registroUsuario");
        if (registroBarbero.className.includes("ocultarDiv")
            && registroNegocio.className.includes("ocultarDiv")
            && registroUsuario.className.includes("ocultarDiv")) {
            console.log("algo2")
            window.location.href = 'index.html'
        } else {
            console.log("algo3")
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

const validacionInputExitosa = (validacion, posicion, campo) => {

    if (posicion.toLowerCase() === "registroUsuario".toLocaleLowerCase()) {
        console.log("Entree", posicion);
        if (campo === "contraseña") {

        }
        cambiarEstadoValidacion(validacion, 0, campo);
        return 0;
    } else if (posicion.toLowerCase() === "registroBarbero".toLocaleLowerCase()) {
        console.log("Entree", posicion);

        cambiarEstadoValidacion(validacion, 1, campo);
        return 1;
    } else if (posicion.toLowerCase() === "registroNegocio".toLocaleLowerCase()) {
        console.log("Entree", posicion);

        cambiarEstadoValidacion(validacion, 2, campo);
        return 2;
    }
}
const cambiarEstadoValidacion = (validacion, index, campo) => {
    const mensajesError = document.querySelectorAll(`#grupo_${campo} p`);
    const checkInput = document.querySelectorAll(`#grupo_${campo} i`);
    const contendorInput = document.querySelectorAll(`#grupo_${campo}`);
    if (validacion === true) {
        contendorInput[index].classList.remove('formulario_grupo-incorrecto');
        contendorInput[index].classList.add('formulario_grupo-correcto');
        checkInput[index].classList.add('fa-check-circle');
        checkInput[index].classList.remove('fa-times-circle');
        mensajesError[index].classList.remove('formulario_input-error-activo');
    } else {
        contendorInput[index].classList.add('formulario_grupo-incorrecto');
        contendorInput[index].classList.remove('formulario_grupo-correcto');
        checkInput[index].classList.remove('fa-check-circle');
        checkInput[index].classList.add('fa-times-circle');
        mensajesError[index].classList.add('formulario_input-error-activo');
    }

}

const validarCampo = (validaciones, input, campo) => {
    const opcionRegistro = document.getElementById("opcionRegistro");
    let registroSeleccionado = opcionRegistro.options[opcionRegistro.selectedIndex].value;
    console.log('Option: ', registroSeleccionado);
    const mensajesError = document.querySelectorAll(`#grupo_${campo} p`);
    const checkInput = document.querySelectorAll(`#grupo_${campo} i`);
    if (validaciones.test(input.value)) {
        var count = validacionInputExitosa(true, registroSeleccionado, campo);
        if (mensajesError[count].innerText.toLowerCase().includes(campo)) {
            mensajesError[count].classList.add("formulario_input-error");
            mensajesError[count].style.display = "none";
            checkInput[count].style.display = "inline";
        }
        campos[campo] = true;
    } else {
        var count = validacionInputExitosa(false, registroSeleccionado, campo);
        if (mensajesError[count].innerText.toLowerCase().includes(campo)) {
            mensajesError[count].classList.add("formulario_input-error");
            mensajesError[count].style.display = "block";
            checkInput[count].style.display = "inline";
        }
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
            validarContraseña2(contraseña1, contraseña2);
            break;
        case "nit":
            validarCampo(validaciones.nit, e.target, 'nit');
            break;
        case "direccion":
            validarCampo(validaciones.direccion, e.target, 'direccion');
            break;
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