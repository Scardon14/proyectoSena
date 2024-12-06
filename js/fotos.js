let btn_editar_1 = document.querySelectorAll(".btn-editar-1");
let idUsuario = document.getElementById("usuario");
let perfil1 = document.getElementById("perfil-usuario");

btn_editar_1.forEach(btn => {
    btn.addEventListener("click", (event) => {
        event.preventDefault();

        const idFoto = btn.getAttribute("idFoto");
        const foto = btn.getAttribute("foto");
        const campo = btn.getAttribute("campo");
        const fotoFront = document.getElementById(`foto-${idFoto}`);

        console.log(`Clic en botón con idFoto: ${idFoto}, campo: ${campo}`);

        if (btn.classList.contains("btn-editar-1")) {
            convertirFilaEnInputs(fotoFront, idFoto, foto, campo, btn);
        } else {
            actualizarFila(fotoFront, idFoto, foto, campo, btn);
        }
    });
});

function convertirFilaEnInputs(fotoFront, idFoto, foto, campo, boton) {
    console.log("Convirtiendo fila en inputs...");

    // Ocultar todas las fotos e inputs dentro del contenedor
    const fotos = fotoFront.querySelectorAll(".foto img");
    const botonesEditar = fotoFront.querySelectorAll(".btn-editar-1");

    fotos.forEach(img => {
        img.style.display = "none";
        console.log("Ocultando imagen:", img.src);
    });

    botonesEditar.forEach(btn => {
        btn.style.display = "none";
        console.log("Ocultando botón editar:", btn);
    });

    // Mostrar solo el botón actual y convertirlo a "Guardar"
    boton.style.display = "block";
    boton.innerHTML = `<i class="bi bi-save"></i> `;
    boton.classList.remove("btn-editar-1", "btn-success");
    boton.classList.add("btn-guardar", "btn-primary");

    // Crear input para cargar archivos
    let inputFile = document.createElement("input");
    inputFile.type = "file";
    inputFile.id = `input-${campo}-${idFoto}`;
    inputFile.classList.add("form-control", "servicio-input");

    // Agregar el input después de las fotos
    fotoFront.appendChild(inputFile);

    console.log("Input file creado y añadido:", inputFile);
}

async function actualizarFila(fotoFront, idFoto, foto, campo, boton) {
    console.log("Actualizando fila...");

    const inputFile = fotoFront.querySelector(`#input-${campo}-${idFoto}`);
    const files = inputFile.files;

    if (files.length === 0) {
        console.warn("No se seleccionó ningún archivo.");
        return;
    }

    console.log("Archivo seleccionado:", files[0].name);

    // Restaurar el estado inicial: mostrar fotos y botones "Editar"
    const fotos = fotoFront.querySelectorAll(".foto img");
    const botonesEditar = fotoFront.querySelectorAll(".btn-editar-1");

    fotos.forEach(img => (img.style.display = "block"));
    botonesEditar.forEach(btn => (btn.style.display = "block"));

    // Cambiar el botón a modo "Editar"
    boton.innerHTML = `<i class="bi bi-pencil-square"></i> Editar`;
    boton.classList.remove("btn-guardar", "btn-primary");
    boton.classList.add("btn-editar-1", "btn-success");

    // Eliminar el input después de guardar
    inputFile.remove();

    // Llamar a la función para actualizar en el servidor
    await actualizarFoto(idFoto, foto, files[0], campo);
    let idperfil = perfil1.getAttribute("idPerfil");
    window.location.href = '../model/ProcesarFotoPerfil.php?idPerfil=' +
        idperfil + '&idUsuario=' + perfil1.getAttribute("idUsuario")
        + '&idNegocio=' + perfil.getAttribute("idNegocio");

}

async function actualizarFoto(id, fotoActual, archivo, campo) {
    console.log("Enviando datos al servidor...");

    const formData = new FormData();
    formData.append("id", id);
    formData.append("fotoActual", fotoActual);
    formData.append("fotoNueva", archivo);
    formData.append("campo", campo);
    formData.append("idUsuario", idUsuario.getAttribute("idUsuario"));

    formData.forEach((value, key) => console.log(`${key}: ${value}`));

    try {
        const response = await fetch("../model/ProcesarFotosTrabajo.php", {
            method: "POST",
            body: formData,
        });

        const textResponse = await response.text();
        console.log("Respuesta del servidor:", textResponse);

        if (!response.ok) throw new Error("Error en el consumo de la API");

        const responseJson = JSON.parse(textResponse);

        if (responseJson.success) {
            alert(responseJson.message);
            location.reload(); // Recargar la página para reflejar los cambios
        } else {
            alert("Error al actualizar la foto");
        }
    } catch (error) {
        console.error("Error en la actualización:", error);
        alert("Ocurrió un error al procesar la solicitud.");
    }
}
