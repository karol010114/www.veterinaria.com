document.addEventListener('DOMContentLoaded', () => {
    const btnNuevaDescripcion = document.getElementById('btndescripcion');
    const notas = document.getElementById('notas');

    // Evento para agregar nuevas notas cuando se hace clic en el botón
    btnNuevaDescripcion.addEventListener('click', () => {
        // crear un nuevo contenedor para la nota
        const nuevaNota = document.createElement('div');
        nuevaNota.style.marginTop = "10px";  // sspacio entre notas
        nuevaNota.style.border = "1px solid #ccc";
        nuevaNota.style.padding = "10px";       
        nuevaNota.style.borderRadius = "5px";
        nuevaNota.style.backgroundColor = "#f9f9f9";

       
        

        // crear el área de texto para la nueva nota
        const textArea = document.createElement('textarea');
        textArea.placeholder = 'Escribe la descripción de esta visita';
        textArea.style.width = '100%';  // Ocupa todo el ancho del contenedor
        textArea.style.height = '100px';  // Altura predeterminada

        // crear el campo de fecha para la visita del cliente
        const fechaVisitaLabel = document.createElement('label');
        fechaVisitaLabel.textContent = 'Fecha de visita: ';
        const fechaVisita = document.createElement('input');
        fechaVisita.type = 'date';
        fechaVisita.required = true;

        // botón para guardar la nota
        const btnGuardar = document.createElement('button');
        btnGuardar.textContent = 'Guardar';
        btnGuardar.type = 'button';  // El botón no envía el formulario

        // botón para eliminar la nota
        const btnEliminar = document.createElement('button');
        btnEliminar.textContent = 'Eliminar nota';
        btnEliminar.type = 'button';  // El botón no envía el formulario

        btnGuardar.addEventListener('click', () => {
            if (textArea.value.trim() && fechaVisita.value) {
                alert('Nota guardada con éxito. Puedes seguir editándola.');
        
                // Actualizar el campo oculto 'descripcion'
                const descripcionCampo = document.getElementById('descripcion');
                descripcionCampo.value += `Fecha: ${fechaVisita.value} - Descripción: ${textArea.value}\n`; // Añade cada nota al campo oculto
        
            } else {
                alert('Por favor, escribe una descripción y selecciona una fecha antes de guardar.');
            }
        });

        //  para eliminar la nota
        btnEliminar.addEventListener('click', () => {
            notas.removeChild(nuevaNota);  // elimina
        });

        // agregar el área de texto, la fecha y los botones al contenedor de la nueva nota
        nuevaNota.appendChild(textArea);
        nuevaNota.appendChild(fechaVisitaLabel);
        nuevaNota.appendChild(fechaVisita);
        nuevaNota.appendChild(btnGuardar);
        nuevaNota.appendChild(btnEliminar);

        //  contenedor de notas
        notas.appendChild(nuevaNota);
    });
});
