<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pacientes</title>
    <link rel="stylesheet" href="styles/ventanas.css"> 
</head>
<body>

    <div class="container">
        <h1>Gestión de Pacientes</h1>
        
        <!-- Botones que redirigen a otras páginas -->
        <div class="button-group">
            <button onclick="window.location.href='registro.php'">Registrar Paciente</button>
            <button onclick="mostrarBusqueda()">Buscar Paciente por ID o Nombre</button>
            <button onclick="window.location.href='ver-clientes.php'">Tabla de Pacientes</button>
        </div>

        <div class="search" id="searchSection">
            <input type="text" id="busqueda" placeholder="Buscar paciente por ID o nombre" />
            <button type="button" onclick="buscarPaciente()">Buscar</button>
        </div>

        <div id="resultados"></div>
    </div>

    <script>
        function mostrarBusqueda() {
            var searchDiv = document.getElementById('searchSection');
            searchDiv.style.display = 'block'; // Muestra el campo de búsqueda
        }

        function buscarPaciente() {
            var busqueda = document.getElementById('busqueda').value;
            var resultadosDiv = document.getElementById('resultados');

            // Enviar la búsqueda al archivo PHP mediante AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'buscar-paciente.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    resultadosDiv.innerHTML = xhr.responseText;
                } else {
                    resultadosDiv.innerHTML = '<p style="color: red;">Error al buscar el paciente.</p>';
                }
            };
            xhr.send('busqueda=' + encodeURIComponent(busqueda));
        }
    </script>

</body>
</html>


