let btn_editar = document.querySelectorAll(".btn-editar");
let servicio = document.querySelectorAll("#servicio");
let detalle = document.querySelectorAll("#detalle");
let duracion = document.querySelectorAll("#duracion");
let precio = document.querySelectorAll("#precio");
let accion = document.querySelectorAll("#accion");
let usuario = document.getElementById("usuario");
let perfil = document.getElementById("perfil");
let negocio = document.getElementById("negocio");
let btn_crear_servicio = document.querySelector(".button-crear-servicio");
let formulario_servicio = document.querySelector(".formulario-servicio");
let idServicio = null;
let btn_eliminar_servicio = document.querySelectorAll(".btn-eliminar");
let btn_cancelar = document.getElementById("btn-cancelar");

btn_cancelar.addEventListener('click', (event) => {
    event.preventDefault();
    formulario_servicio.classList.add("ocultarDiv");
});

btn_eliminar_servicio.forEach(btn => {
    btn.addEventListener('click', async (event) => {
        event.preventDefault();
        idServicio = btn.getAttribute("servicio");
        await eliminarServicio(idServicio);
        window.location.href = '../model/ProcesarFotoPerfil.php?idPerfil=' +
            perfil.getAttribute("perfil") + '&idUsuario=' + usuario.getAttribute("usuario")
            + '&idNegocio=' + negocio.getAttribute("negocio");
    });
});

btn_crear_servicio.addEventListener('click', () => {
    formulario_servicio.classList.remove("ocultarDiv");
});

btn_editar.forEach(btn => {
    btn.addEventListener('click', (event) => {
        event.preventDefault();
        const idServicio = btn.getAttribute("servicio");
        const fila = document.getElementById(`servicio-${idServicio}`);

        // Verificamos si el botón está en modo "Guardar" o "Editar"
        if (btn.textContent.trim() === "Editar") {
            convertirFilaEnInputs(fila, btn);
        } else {
            actualizarFila(fila, btn, idServicio);
        }
    });
});

// Función para convertir una fila en campos de entrada
function convertirFilaEnInputs(fila, boton) {
    const celdas = fila.querySelectorAll("td");
    const [servicio, detalle, duracion, precio, accion] = celdas;

    // Transformar celdas en inputs
    servicio.innerHTML = `<input type="text" value="${servicio.textContent.trim()}" class="form-control servicio-input">`;
    detalle.innerHTML = `<input type="text" value="${detalle.textContent.trim()}" class="form-control detalle-input">`;
    duracion.innerHTML = `<input type="number" value="${duracion.textContent.trim().replace(' minutos', '')}" class="form-control duracion-input">`;
    precio.innerHTML = `<input type="number" value="${precio.textContent.trim()}" class="form-control precio-input">`;
    // Cambiar el botón a modo "Guardar"
    boton.innerHTML = `<i class="bi bi-save">Guardar</i>`;
    boton.classList.remove("btn-success");
    boton.classList.add("btn-primary");
}

// Función para actualizar los valores de una fila
async function actualizarFila(fila, boton, idServicio) {
    const servicioInput = fila.querySelector(".servicio-input").value.trim();
    const detalleInput = fila.querySelector(".detalle-input").value.trim();
    const duracionInput = fila.querySelector(".duracion-input").value.trim();
    const precioInput = fila.querySelector(".precio-input").value.trim();

    const celdas = fila.querySelectorAll("td");
    const [servicio, detalle, duracion, precio, accion] = celdas;

    // Actualizar las celdas con los valores nuevos
    servicio.textContent = servicioInput;
    detalle.textContent = detalleInput;
    duracion.textContent = `${duracionInput} minutos`;
    precio.textContent = precioInput;

    // Cambiar el botón de nuevo a modo "Editar"
    boton.innerHTML = `<i class="bi bi-pencil-square">Editar</i>`;
    boton.classList.remove("btn-primary");
    boton.classList.add("btn-success");

    // Opcional: Aquí puedes realizar una llamada AJAX para enviar los datos al servidor
    console.log("Datos actualizados:", {
        idServicio,
        servicio: servicioInput,
        detalle: detalleInput,
        duracion: duracionInput,
        precio: precioInput
    });
    await actualizarServicio(idServicio,servicioInput, detalleInput, duracionInput, precioInput);
                window.location.href = '../model/ProcesarFotoPerfil.php?idPerfil=' +
                    perfil.getAttribute("perfil") + '&idUsuario=' + usuario.getAttribute("usuario")
                    + '&idNegocio=' + negocio.getAttribute("negocio");
}

async function actualizarServicio(idServicio,servicio, descrpicion, duracion, precio) {
    console.log("Datos aaas:", {
        idServicio,
        servicio: servicio,
        detalle: descrpicion,
        duracion: duracion,
        precio: precio
    });
    const response = await fetch('../model/ProcesarServicio.php', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            idServicio: idServicio,
            servicio: servicio,
            descripcion: descrpicion,
            duracion: duracion,
            precio: precio
        })
    })
    if (!response.ok) {
        throw new Error('Error en el consumo de la api');
    }
    try {
        const responseJson = await response.json();
        console.log("Response: " , responseJson);
        if (responseJson.success) {
            alert(responseJson.message);  // Muestra el mensaje de éxito
        } else {
            alert("Error al actualizar el servicio")
        }
    } catch (error) {
        console.error('Error al parsear el JSON:', error);
        alert('Hubo un problema al procesar la respuesta');
    }

}

async function eliminarServicio(idServicio) {
    console.log("DELETE: ", idServicio);
    const response = await fetch('../model/ProcesarServicio.php', {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            idServicio: idServicio
        })
    });
    if (!response.ok) {
        throw new Error('Error en el consumo de la api');
    }
    try {
        const responseJson = await response.json();
        if (responseJson.success) {
            alert(responseJson.message);  // Muestra el mensaje de éxito
        } else {
            alert("Error al eliminar el servicio")
        }
    } catch (error) {
        console.error('Error al parsear el JSON:', error);
        alert('Hubo un problema al procesar la respuesta');
    }
}