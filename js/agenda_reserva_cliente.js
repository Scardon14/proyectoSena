let nombresMes = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

let fechaActual = new Date();
let diaActual = fechaActual.getDate(); //devuelve el día del mes de un objeto (un valor entre 1 y 31//
let numeroMes = fechaActual.getMonth(); //devuelve un número entre 0 y 11, representando el mes//
let añoActual = fechaActual.getFullYear(); //devuelve el año en formato de 4 dígitos (por ejemplo, 2024 en lugar de 24)//

let fechas = document.getElementById('fechas');
let mes = document.getElementById('mes');
let año = document.getElementById('año');
let prevMesDom = document.getElementById('prev_mes');
let nextMesDom = document.getElementById('next_mes');
let btnCerrarRecuadro = document.getElementById('btn-cerrar-recuadro');
let btnCerrarDetalle = document.getElementById('btn-cerrar-detalle');
let btnActualizarReserva = document.getElementById('btn-finalizar-reserva');


mes.textContent = nombresMes[numeroMes]; //devuelve el texto que contiene el elemento//
año.textContent = añoActual.toString(); //la funcion .toString() convierte un valor u objeto en cadena, en este caso mostrara en texto la fecha//

// Función para obtener los dias de la semana de lunes a domingo
let startDay = (mes, año) => {
    let start = new Date(año, mes, 1);
    return (start.getDay() === 0) ? 6 : start.getDay() - 1;
};
// Función para obtener la cantidad de días en el mes
let getTotalDays = (mes, año) => {
    if (mes === -1) { mes = 11; }
    if (mes === 0 || mes === 2 || mes === 4 || mes === 6 ||
        mes === 7 || mes === 9 || mes === 11) {
        return 31;

    } else if (mes === 3 || mes === 5 || mes === 8 || mes === 10) {
        return 30;

    } else {
        return isLeap(año) ? 29 : 28; // la funcion isLeap ayuda a determinar si un año es bisiesto o no//
    }
};

//Funcion para escribir los dias del mes
let escribirMes = (mes1, año1) => {
    fechas.innerHTML = '';
    // Validacion para mostrar los meses y años futuros
    if ((año1 > añoActual) || (mes1 > numeroMes && año1 >= añoActual)) {

        //Muestra los dias de lunes a domingo y trae los ultimos dias del mes anterior si no llega a comenzar el lunes
        for (let i = startDay(mes1, año1); i > 0; i--) {
            fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-futuro">
            ${getTotalDays(mes1 - 1) - (i - 1)}</div>`;
        }
        //Muestra los dias del mes futuros
        for (let i = 1; i <= getTotalDays(mes1, añoActual); i++) {
            fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-futuro" data-dia="${i}">${i}</div>`;
        }
    } else if (mes1 === numeroMes && año1 === añoActual) {

        //Muestra los dias de lunes a domingo y trae los ultimos dias del mes anterior si no llega a comenzar el lunes//
        console.log("Entre mes actual: ", mes1, " ", año1);
        for (let i = startDay(mes1, año1); i > 0; i--) {
            fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-pasado" data-dia="${i}"> ${getTotalDays(mes1 - 1) - (i - 1)}</div>`;
        }

        for (let i = 1; i <= getTotalDays(mes1, añoActual); i++) {
            if (mes1 === numeroMes && añoActual === añoActual) {
                // Si es el mes y año actual//
                if (i < diaActual) {
                    // Deshabilitar días pasados//
                    fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-pasado"data-dia="${i}">${i}</div>`;
                } else if (i === diaActual) {
                    // Día actual //
                    fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-actual" style="background-color: lightblue;" data-dia="${i}">${i}</div>`;
                } else {
                    // Días futuros //
                    fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-futuro" data-dia="${i}">${i}</div>`;
                }
            }
        }

    } else if ((año1 < añoActual) || (mes1 < numeroMes && año1 === añoActual)) {
        //Muestra los dias de lunes a domingo y trae los ultimos dias del mes anterior si no llega a comenzar el lunes//
        console.log("Entre mes actual: ", mes1, " ", año1);
        for (let i = startDay(mes1, año1); i > 0; i--) {
            fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_last-dias calendario_dia-pasado">
             ${getTotalDays(mes1 - 1) - (i - 1)}</div>`;
        }
        // Muestra los dias del mes pero inhabilitados
        for (let i = 1; i <= getTotalDays(mes1, añoActual); i++) {
            fechas.innerHTML += `<div class="calendario_fechas calendario_item calendario_dia-pasado" data-dia="${i}">${i}</div>`;
        }
    }
    let calendario = document.querySelector(".calendario");
    // Asociar eventos de clic solo a días futuros o al actual
    let diasFuturos = document.querySelectorAll('.calendario_dia-futuro, .calendario_dia-actual');
    diasFuturos.forEach(dia => {
        dia.addEventListener('click', async function () {
            let fecha = fechaActual.getFullYear() + "-" + (fechaActual.getMonth() + 1) + "-" + dia.textContent;
            console.log("Fecha: ", fecha);
            await reservaBarberoDia(27, fecha);
            calendario.classList.add("ocultarDiv");
            let diaSeleccionado = dia.getAttribute('data-dia');
            mostrarHoras(diaSeleccionado);
        });
    });
};

//Horas Disponibles //

// Mostrar el recuadro de horas
let mostrarHoras = (diaSeleccionado) => {
    let recuadroHoras = document.getElementById('recuadro-horas');
    if (!recuadroHoras) {
        console.error('El recuadro de horas no se encuentra en el DOM.');
        return;
    }
    recuadroHoras.style.display = 'block';

    // Actualizar el día seleccionado en el recuadro
    let diaSeleccionadoTexto = document.getElementById('dia-seleccionado');
    diaSeleccionadoTexto.textContent = diaSeleccionado;

    // Generar horas disponibles para ese día (puedes ajustar las horas según tu preferencia)
    let horasDisponibles = document.getElementById('horas-disponibles');
    horasDisponibles.innerHTML = '';

    let horas = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];
    let recuadroDetalleReserva = document.querySelector('.recuadro-detalle-reserva');
    let detalleReserva = document.querySelector('.detalle-reserva');
    horas.forEach(hora => {
        let horaDiv = document.createElement('div');
        horaDiv.className = 'hora-item';
        horaDiv.textContent = hora;

        // Puedes agregar eventos de clic si necesitas seleccionar una hora
        horaDiv.addEventListener('click', () => {
            let diaSeleccionado = document.getElementById('dia-seleccionado').textContent;
            // Redirigir a la página "Historial Citas" con parámetros de fecha y hora seleccionada
            //window.location.href = `historial_citas.php?dia=${diaSeleccionado}&hora=${hora}`;
            recuadroHoras.style.display = 'none';
            recuadroDetalleReserva.classList.remove("ocultarDiv");
            reservas.forEach(horaReserva => {
                let horaReservada = new Date(horaReserva.fechaReserva);
                let horaInicio = horaReservada.getHours();
                let horaReservadaFin = new Date(horaReserva.fechaFinalizacion);
                let horaFin = horaReservadaFin.getHours();
                let compararHora = horaDiv.textContent.substring(0, 2);
                let estado;
                if (horaReserva.estado === 1){
                    estado = 'Completado';
                }else if(horaReserva.estado === 2){
                    estado = 'Reservado';
                }
                else if(horaReserva.estado === 0){
                    estado = 'Pendiente';
                }
                if (compararHora >= horaInicio && compararHora <= horaFin) {
                    detalleReserva.innerHTML = `
                    <p id="idReserva" hidden>${horaReserva.idReserva}</p>
                    <p><strong> Nombre: </strong> ${horaReserva.nombres} ${horaReserva.apellidos}</p>
                    <p><strong>Correo: </strong> ${horaReserva.correoElectronico}</p>
                    <p><strong>celular: </strong> ${horaReserva.numeroCelular}</p>
                    <p><strong>Hora inicio: </strong> ${horaReserva.fechaReserva}</p>
                    <p><strong>Hora Fin: </strong> ${horaReserva.fechaFinalizacion}</p>
                    <p><strong>Estado</strong> ${estado}</p>`;
                    //detalleReserva.textContent = `Nombre: ${horaReserva.nombres} ${horaReserva.apellidos}`;
                    //detalleReserva.textContent = `Nombre: ${horaReserva.nombres} ${horaReserva.apellidos}`;
                }
            });
        });
        horasDisponibles.appendChild(horaDiv);
    });
    reservas.forEach(horaReserva => {
        let horaReservada = new Date(horaReserva.fechaReserva);
        let horaInicio = horaReservada.getHours();
        let horaReservadaFin = new Date(horaReserva.fechaFinalizacion);
        let horaFin = horaReservadaFin.getHours();
        let horaDivReservado = document.querySelectorAll('.hora-item'); //reservado
        horaDivReservado.forEach(a => {
            let comprarHora = a.textContent.substring(0, 2);
            /*if(a.textContent.includes(`${horaInicio}`)
            || a.textContent.includes(`${horaFin}:`)){*/
            if (comprarHora >= horaInicio && comprarHora <= horaFin && horaReserva.estado === 2) {
                a.classList.add('reservado');
            }else if(comprarHora >= horaInicio && comprarHora <= horaFin && horaReserva.estado === 1){
                a.classList.add('completado');
            }
        });
    });
};
// Llamar a la función de escribir mes en el mes actual
escribirMes(numeroMes, añoActual);

// Manejo de eventos para cambiar de mes
prevMesDom.addEventListener('click', () => lastMes()); //addEventListener('click', ()=>nextMes()) escucha el evento de clic en un elemento y ejecuta la función nextMes() cuando ocurre el clic//
nextMesDom.addEventListener('click', () => nextMes());

// Función para determinar si es año bisiesto
let isLeap = (año) => {
    return ((año % 100 !== 0) && (año % 4 === 0) || (año % 400 === 0));
};
let mes1 = numeroMes, año1 = añoActual;

// Función para ir al mes anterior
let lastMes = () => {
    if (mes1 > 0 && mes1 <= 11) {
        mes1 = mes1 - 1;
        console.log("Entre", mes1);
    } else {
        mes1 = 11;
        año1 = año1 - 1;
    }
    setNewDate(mes1, año1);
};

// Función para ir al siguiente mes
let nextMes = () => {
    if (mes1 === 11) {
        mes1 = 0;
        año1 = año1 + 1;
    } else if (mes1 < 11 && mes1 >= 0) {
        mes1 = mes1 + 1;
    }
    console.log("mes2: ", mes1, año1);
    setNewDate(mes1, año1);
};

// Función para establecer la nueva fecha y escribir el mes
let setNewDate = (mes1, año1) => {
    console.log("mes3: ", mes1);
    fechaActual.setFullYear(año1, mes1, 1);
    console.log("fecha actual: ", fechaActual);
    mes.textContent = nombresMes[mes1];
    año.textContent = año1.toString();
    fechas.textContent = '';
    escribirMes(mes1, año1);
}

// Asociar eventos de clic solo a días futuros o al actual
let dias = document.querySelectorAll('.calendario_fechas');
let diaf = [];
dias.forEach(dia => {
    if (!dia.classList.contains('calendario_last-dias')) {
        if (!dia.classList.contains('calendario_dia-pasado')) {
            diaf.push(dia.className);
        }

    }
});

let diasss = []
diaf.forEach(dia => {
    diasss = Array.from(document.querySelectorAll('.calendario_fechas .calendario_item'))
        .filter(e => e.classList.length === 2);
});

// Asociar eventos a los días del calendario
document.addEventListener('DOMContentLoaded', function () {
    diasss.forEach(auxiliar => {
        auxiliar.addEventListener('click', function () {
            let diaSeleccionado = auxiliar.getAttribute('data-dia');
            mostrarHoras(diaSeleccionado);
        });
    });
});

// Ocultar recuadro horas
btnCerrarRecuadro.addEventListener('click', () => {
    let recuadroHoras = document.getElementById('recuadro-horas');
    let calendario = document.querySelector(".calendario");
    calendario.classList.remove("ocultarDiv");
    recuadroHoras.style.display = 'none';
});

btnActualizarReserva.addEventListener('click', () => {
    let idReserva = document.getElementById("idReserva");
    if(idReserva.textContent.trim !== ""){
        finalizarReserva(idReserva.textContent,1);
        window.location.href = `agenda_barbero.php`;
    }
});
// Ocultar recuadro horas
btnCerrarDetalle.addEventListener('click', () => {
    let recuadroHoras = document.getElementById('recuadro-horas');
    let recuadroDetalleReserva = document.querySelector('.recuadro-detalle-reserva');
    //let calendario = document.querySelector(".calendario");
    let detalleReserva = document.querySelector('.detalle-reserva');
    detalleReserva.innerHTML = ''
    recuadroDetalleReserva.classList.add("ocultarDiv");
    recuadroHoras.style.display = 'block';
});

let reservas = null;
async function reservaBarberoDia(idEmpleado, fecha) {
    try {
        // Realiza la solicitud a través de fetch
        const response = await fetch('../model/ProcesarCalendarioBarbero.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: idEmpleado,
                fechaReserva: fecha
            })
        });

        // Verifica si la respuesta fue exitosa
        if (!response.ok) {
            throw new Error('Error en la respuesta de la red');
        }

        // Espera a que la respuesta sea convertida a JSON
        reservas = await response.json(); // Ya se convierte en arreglo de objetos automáticamente
        console.log("IDEMPLEADO:", idEmpleado);

        console.log("Response:", reservas);

        // Puedes trabajar con "reservas" directamente como un arreglo
        reservas.forEach(reserva => {
            console.log(`Reserva ID: ${reserva.idReserva}, Fecha: ${reserva.fechaReserva}`);
        });

        return reservas; // Devuelve el arreglo de objetos si es necesario

    } catch (error) {
        console.error('Error:', error);
        return null; // Devuelve null en caso de error
    }
}
let respuestaActualizar = null;
async function finalizarReserva(idReserva, nuevoEstado) {
    try {
        // Realiza la solicitud PUT
        const response = await fetch('../model/ProcesarCalendarioBarbero.php', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: idReserva,
                estado: nuevoEstado
            })
        });

        // Verifica si la respuesta fue exitosa
        if (!response.ok) {
            throw new Error('Error en la respuesta de la red');
        }

        // Obtén el texto de la respuesta
        const responseText = await response.text();  // Usa text() en lugar de json()
        console.log('Response text:', responseText);  // Muestra la respuesta como texto

        // Si la respuesta es un JSON válido, la convierte a JSON
        try {
            const respuestaActualizar = JSON.parse(responseText);
            console.log("Response:", respuestaActualizar);

            // Verifica si la actualización fue exitosa
            if (respuestaActualizar.success) {
                alert(respuestaActualizar.message);  // Muestra el mensaje de éxito
            } else {
                alert('No se pudo actualizar la reserva');
            }

        } catch (error) {
            console.error('Error al parsear el JSON:', error);
            alert('Hubo un problema al procesar la respuesta');
        }

        return responseText;  // Devuelve el texto de la respuesta para verificación
    } catch (error) {
        console.error('Error:', error);
        alert('Hubo un error al procesar la solicitud');
        return null;  // Devuelve null en caso de error
    }
}

