document.getElementById('editIcon').addEventListener('click', function() {
    // Mostrar el formulario para editar
    document.getElementById('editForm').classList.remove('hidden');
});

document.getElementById('saveButton').addEventListener('click', function() {
    // Obtener el nuevo valor del campo de texto
    var newText = document.getElementById('textInput').value;
    
    // Actualizar el texto en el contenedor principal
    document.getElementById('buttonText').textContent = newText;
    
    // Ocultar el formulario
    document.getElementById('editForm').classList.add('hidden');
});