let btn_editar = document.querySelectorAll(".btn-success");
let servicio = document.querySelectorAll("#servicio");
let detalle = document.querySelectorAll("#detalle");
let duracion = document.querySelectorAll("#duracion");
let precio = document.querySelectorAll("#precio");
let accion = document.querySelectorAll("#accion");
let usuario = document.getElementById("usuario");
let perfil = document.getElementById("perfil");
let negocio = document.getElementById("negocio");

let idServicio = null;
btn_editar.forEach( btn => {
    btn.addEventListener('click', () =>{
        idServicio = btn.getAttribute("servicio");
        eliminarDetalle();
        console.log("ENTREE");
        //convertirInput(idServicio);
    });
});
/*idServicio.forEach( btn => {
    btn.addEventListener('click', () =>{
        convertirInput(idServicio);
    });
});*/

function eliminarDetalle(){
    let valor_servicio, valor_descrpicion, valor_duracion, valor_precio
    servicio.forEach( btn => {
        if(btn.getAttribute("servicio") === idServicio){
            valor_servicio = btn.textContent;
            btn.innerHTML= 
            '<td><input id="servicio-input" type="text" value="'+valor_servicio+'"></td>';
            const input = document.getElementById("servicio-input");
                input.addEventListener('input', () => {
                    let nuevoValor = input.value; // Capturar el valor mientras se edita
                    input.setAttribute('value', nuevoValor);
                    console.log("Nuevo valor: " + input.getAttribute("value"));
                    valor_servicio = input.getAttribute("value");
                });
        }
    });
    detalle.forEach( btn => {
        console.log(btn.getAttribute("servicio")+ " EEEE: "+ idServicio);
        if(btn.getAttribute("servicio") === idServicio){
            valor_descrpicion = btn.textContent;
            btn.innerHTML= 
            '<td><input id="detalle-input" type="text" value="'+valor_descrpicion+'"></td>';
            const input = document.getElementById("detalle-input");
                input.addEventListener('input', () => {
                    let nuevoValor = input.value; // Capturar el valor mientras se edita
                    input.setAttribute('value', nuevoValor);
                    valor_descrpicion = input.getAttribute("value");
                });
        }
    });
    duracion.forEach( btn => {
        console.log(btn.getAttribute("servicio")+ " EEEE: "+ idServicio);
        if(btn.getAttribute("servicio") === idServicio){
           valor_duracion = btn.textContent;
            btn.innerHTML= 
            '<td><input id="duracion-input" type="text" value="'+valor_duracion+'"></td>';
            const input = document.getElementById("duracion-input");
                input.addEventListener('input', () => {
                    let nuevoValor = input.value; // Capturar el valor mientras se edita
                    input.setAttribute('value', nuevoValor);
                    valor_duracion = input.getAttribute("value");
            });
        }
    });
    precio.forEach( btn => {
        console.log(btn.getAttribute("servicio")+ " EEEE: "+ idServicio);
        if(btn.getAttribute("servicio") === idServicio){
            valor_precio = btn.textContent;
            btn.innerHTML= 
            '<td><input id="precio-input" type="text" value="'+valor_precio+'"></td>';
            const input = document.getElementById("precio-input");
                input.addEventListener('input', () => {
                let nuevoValor = input.value; // Capturar el valor mientras se edita
                input.setAttribute('value', nuevoValor);
                valor_precio = input.getAttribute("value");
            });
        }
    });
    accion.forEach( btn => {
        console.log(btn.getAttribute("servicio")+ " sssxxEEEE: "+ idServicio);
        if(btn.getAttribute("servicio") === idServicio){
            btn.innerHTML= 
            '<td><button id="actualizar" class="btn btn-small btn-success" type="submit"><i class="bi bi-pencil-square">Editar</i></button>';
            const btn_update = document.getElementById("actualizar");
            btn_update.addEventListener('click', async () => {
                await actualizarServicio(valor_servicio, valor_descrpicion, valor_duracion, valor_precio);
                window.location.href = '../model/ProcesarFotoPerfil.php?idPerfil='+
                    perfil.getAttribute("perfil")+'&idUsuario='+usuario.getAttribute("usuario")
                    +'&idNegocio='+negocio.getAttribute("negocio");
            });
        }
    });
}

async function actualizarServicio(servicio, descrpicion, duracion, precio){
    const response = await fetch('../model/ProcesarServicio.php',{
        method: 'PUT',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            idServicio: idServicio,
            servicio: servicio,
            descripcion:  descrpicion,
            duracion: duracion,
            precio: precio
        })
    })

    if(!response.ok){
        throw new Error('Error en el consumo de la api');
    }
    try{
        const responseJson = await response.json();
        if(responseJson.success){
            alert(responseJson.message);  // Muestra el mensaje de éxito
        }else{
            alert("Error al actualizar la reserva")
        }
    }catch (error) {
        console.error('Error al parsear el JSON:', error);
        alert('Hubo un problema al procesar la respuesta');
    }

}

async function eliminarServicio(idServicio){
    const response = await fetch('../model/ProcesarServicio.php',{
            method: 'DELETE',
            headers:{
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                idServicio: idServicio
            })
        });
}