<?php
// Establecer conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Comprobar si se ha enviado el formulario de búsqueda
if (isset($_POST['busqueda'])) {
    $busqueda = htmlspecialchars(trim($_POST['busqueda'])); // Escapar y limpiar la entrada para evitar inyecciones XSS

    // Consulta para seleccionar el paciente por ID o nombre del propietario
    $sql = "SELECT * FROM clientes WHERE id = ? OR propietario LIKE ?";
    $stmt = $conexion->prepare($sql);

    // Asegurar la búsqueda por nombre usando comodines
    $busqueda_nombre = "%$busqueda%";
    $stmt->bind_param("is", $busqueda, $busqueda_nombre);

    $stmt->execute();
    $result = $stmt->get_result();

    // Crear una tabla para mostrar los resultados
    echo "<link rel='stylesheet' type='text/css' href='styles.css'>"; // Incluye tu CSS externo

    if ($result->num_rows > 0) {
        echo "<table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Propietario</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>DNI</th>
                        <th>Paciente</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Sexo</th>
                        <th>Color</th>
                        <th>Fecha de Seguimiento Inicio</th>
                        <th>Fecha de Seguimiento Fin</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>";

        // Mostrar los datos de cada fila
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['propietario']}</td>
                    <td>{$row['direccion']}</td>
                    <td>{$row['telefono']}</td>
                    <td>{$row['dni']}</td>
                    <td>{$row['paciente']}</td>
                    <td>{$row['fechaNacimiento']}</td>
                    <td>{$row['especie']}</td>
                    <td>{$row['raza']}</td>
                    <td>{$row['sexo']}</td>
                    <td>{$row['color']}</td>
                    <td>{$row['fechaSeguimientoInicio']}</td>
                    <td>{$row['fechaSeguimientoFin']}</td>
                    <td>{$row['descripcion']}</td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='error-message'>No se encontraron resultados para la búsqueda: <strong>" . htmlspecialchars($busqueda) . "</strong>.</p>";
    }

    $stmt->close();
}

$conexion->close();
?>

