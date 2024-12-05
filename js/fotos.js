let btn_editar = document.querySelectorAll(".btn-editar");
let idUsuario = document.getElementById("idUsuario");
let idFoto = null;

btn_editar.forEach(btn => {
    btn.addEventListener('click', (event) => {
        event.preventDefault();
        const idFoto = btn.getAttribute("idFoto");
        const foto = btn.getAttribute("foto");
        const campo = btn.getAttribute("campo");
        const fotoFront = document.getElementById(`foto-${idFoto}`);
        const label = fotoFront.querySelector('i');
         // Mostrar valores en la consola
        console.log("idFoto:", idFoto);
        console.log("foto:", foto);
        console.log("campo:", campo);
        console.log("fotoFront:", fotoFront);
        console.log("label (ícono):", label);
        console.log(label.getAttribute('class'));
        // Verificamos si el botón está en modo "Guardar" o "Editar"
        if (label.classList.contains('bi-pencil-square')) {
            convertirFilaEnInputs(fotoFront,idFoto, foto, campo, btn);
            console.log("EEE");
        } else {
            actualizarFila(fotoFront,idFoto, foto, campo, btn);
            console.log("AAA");

        }
    });
});


function convertirFilaEnInputs(fotoFront, idFoto, foto, campo, boton) {
    // Encontrar el contenedor de la foto
    const contenedorFoto = fotoFront.querySelector(".foto");
    
    if (contenedorFoto) {
        // Eliminar la imagen existente
        const imagen = contenedorFoto.querySelector("img");
        if (imagen) {
            contenedorFoto.removeChild(imagen);
        }

        // Crear el input para cargar archivos
        const inputFile = document.createElement("input");
        inputFile.type = "file";
        inputFile.id = `input-${campo}-${idFoto}`; // ID único por campo e ID
        inputFile.classList.add("form-control", "servicio-input");

        // Insertar el input en el contenedor
        contenedorFoto.appendChild(inputFile);

        // Modificar el botón a modo "Guardar"
        boton.innerHTML = `<i class="bi bi-save">Guardar</i>`;
        boton.classList.remove("btn-success");
        boton.classList.add("btn-primary");
    } else {
        console.error("No se encontró el contenedor de la foto.");
    }
}


// Función para actualizar los valores de una fila
async function actualizarFila(fotoFront, idFoto, foto, campo, boton) {
    const contenedorFoto = fotoFront.querySelector(".foto");
    const id = '#input-'+ campo + '-' + idFoto; 
    console.log('input-'+ campo);
    const servicioInput = contenedorFoto.querySelector(id);
    const files = servicioInput.files;

    if (files.length > 0) {
        console.log("Archivo seleccionado:", files[0].name);
        console.log("Tamaño:", files[0].size, "bytes");
        console.log("Tipo:", files[0].type);
    } else {
        console.log("No se seleccionó ningún archivo.");
    }
    boton.innerHTML = `<i class="bi bi-pencil-square">Editar</i>`;
    boton.classList.remove("btn-primary");
    boton.classList.add("btn-success");


    await actualizarFoto(idFoto, foto, files, campo);
                /*window.location.href = '../model/ProcesarFotoPerfil.php?idPerfil=' +
                    perfil.getAttribute("perfil") + '&idUsuario=' + usuario.getAttribute("usuario")
                    + '&idNegocio=' + negocio.getAttribute("negocio");*/
}

async function actualizarFoto(id, fotoActual, fotoNueva, campo) {

    const formData = new FormData();
    formData.append("id", id);
    formData.append("fotoActual", fotoActual);
    formData.append("fotoNueva", fotoNueva[0]);
    formData.append("campo", campo);
    formData.append("idUsuario", idUsuario.getAttribute("idUsuario"));
    formData.forEach((value, key) => {
        console.log(`${key}: ${value}`);
    });
    const response = await fetch('../model/ProcesarFotosTrabajo.php', {
        method: 'POST',
        body: formData
    })

    const textResponse = await response.text();  // Usar text() para obtener la respuesta como texto
        console.log("Response text: ", textResponse);
    if (!response.ok) {
        throw new Error('Error en el consumo de la api');
    }
    try {
        
        const responseJson = JSON.parse(textResponse);
        console.log("Response text: ", textResponse);  // Imprimir lo que está devolviendo el servidor
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
