// para que el bonto x sea funcional
function cancelarCita(nombreBarbero) {
    alert('Cita con ' + nombreBarbero + ' ha sido cancelada.');
    // Aquí podrías añadir código para actualizar la base de datos
  }
  
  function confirmarCita(nombreBarbero) {
    alert('Cita con ' + nombreBarbero + ' ha sido confirmada.');
    // Aquí podrías añadir código para actualizar la base de datos
  }

// para que aparezca mensajeal oprimir x

function confirmar() {
    const respuesta = confirm("¿Estás seguro de que quieres continuar?");
    if (respuesta) {
        alert("Has confirmado.");
    } else {
        alert("Has cancelado.");
    }
}
