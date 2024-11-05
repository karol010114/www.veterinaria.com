<?php
// Establecer conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para seleccionar todos los clientes
$sql = "SELECT * FROM clientes";
$result = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="styles/index.css"> <!-- Vincula a un archivo CSS externo -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Fondo suave */
            color: #333; /* Texto oscuro */
            padding: 20px;
            text-align: center;
        }

        table {
            margin: 20px auto; /* Centra la tabla */
            border-collapse: collapse;
            width: 80%; /* Ancho de la tabla */
            background-color: white; /* Fondo blanco para la tabla */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        th, td {
            border: 1px solid #ddd; /* Bordes más suaves */
            padding: 12px; /* Relleno de celdas */
            text-align: left;
        }

        th {
            background-color: #6a1b9a; /* Encabezado morado */
            color: white; /* Texto blanco */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Fila par con fondo gris claro */
        }

        tr:hover {
            background-color: #e0e0e0; /* Efecto hover */
        }

        h1 {
            color: #6a1b9a; /* Título morado */
        }
    </style>
</head>
<body>

    <h1>Lista de Clientes</h1>

<?php
if ($result->num_rows > 0) {
    // Crear una tabla para mostrar los resultados
    echo "<table>";
    echo "<tr>
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
          </tr>";

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

    echo "</table>";
} else {
    echo "<p>No hay resultados.</p>";
}

$conexion->close();
?>

</body>
</html>
