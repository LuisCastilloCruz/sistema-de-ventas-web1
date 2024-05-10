
    <script>
    // Agrega un evento clic al botón de búsqueda
    document.getElementById('buscar').addEventListener('click', function () {
        // Obtiene los valores de los selectores y realiza la búsqueda
        var origenSelect = document.getElementById('terminal_origen_id');
        var destinoSelect = document.getElementById('terminal_destino_id');
        var selectedDate = document.getElementById('date1').value;

        // Obtener los valores seleccionados
        var origenSeleccionado = origenSelect.value;
        var destinoSeleccionado = destinoSelect.value;

        // Realizar una solicitud al servidor para obtener los horarios correspondientes
        // Puedes usar AJAX o Fetch para hacer esto

        // Aquí se muestra un ejemplo utilizando Fetch
        fetch('db.php?origen=' + origenSeleccionado + '&destino=' + destinoSeleccionado)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            // Manipular los datos recibidos y mostrarlos en la página
            mostrarHorariosEnPagina(data);
        })
        .catch(error => {
            console.error('Error al obtener los horarios:', error);

            // Agrega este bloque para imprimir la cadena que intentaste analizar
            response.text().then(text => {
                console.log('Texto recibido:', text);
            });
        });
});
// Función para mostrar los horarios en la página
function mostrarHorariosEnPagina(data) {
    // Puedes manipular los datos y mostrarlos en tu página según tus necesidades
    // Por ejemplo, puedes utilizar el resultado para construir y mostrar un listado de horarios

    console.log(data);

    // Ejemplo: actualizar un contenedor en la página con los horarios recibidos
    var horariosContainer = document.getElementById('horariosContainer');
    horariosContainer.innerHTML = '';  // Limpiar el contenido anterior

    // Recorrer los datos y construir un listado
    for (var i = 0; i < data.length; i++) {
        var horario = data[i];
        var horaSalida = horario.hora_salida;
        var origen, destino;
        // Crear un elemento de lista para cada horario
        var listItem = document.createElement('li');

        // Agregar la hora de salida al elemento de lista
        listItem.textContent = 'Hora Salida: ' + horaSalida;

        // Verificar si hay destinos_horarios y si es una cadena no vacía
        if (horario.destinos_horarios !== null && horario.destinos_horarios !== undefined) {
            try {
                // Analizar la cadena JSON dentro de destinos_horarios
                var destinosHorarios = JSON.parse(horario.destinos_horarios);

                // Verificar si existen destinosHorarios y si hay al menos un elemento
                if (destinosHorarios && destinosHorarios.length > 0) {
                    // Acceder a la información dentro de destinosHorarios
                    var origen = destinosHorarios[0].origen.nombre;
                    var destino = destinosHorarios[destinosHorarios.length-1].destino.nombre;

                    // Agregar información adicional sobre los destinos al elemento de lista
                    listItem.textContent += ', Terminal Origen: ' + origen + ', Terminal Destino: ' + destino;
                } else {
                    console.error('Error: No se encontraron destinosHorarios válidos para el horario con id ' + horario.id);
                }
            } catch (error) {
                console.error('Error al analizar destinos_horarios para el horario con id ' + horario.id + ':', error);
            }
        } else {
            // Si destinos_horarios es null, simplemente agrega un mensaje indicando que no hay información de destinos disponible para ese horario

            origen = horario.terminal_origen;
            destino = horario.terminal_destino;
            listItem.textContent += ', Terminal Origen: ' + origen + ', Terminal Destino: ' + destino;
        }

        // Agregar el elemento de lista al contenedor
        horariosContainer.appendChild(listItem);
    }

    // Mostrar el contenedor después de haber agregado todos los elementos
    horariosContainer.style.display = 'block';
}





</script>
