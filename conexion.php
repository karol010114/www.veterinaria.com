<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Para depuración: mostrar los datos recibidos
echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y sanitizar los datos del formulario
    $propietario = $conn->real_escape_string($_POST["propietario"] ?? '');
    $direccion = $conn->real_escape_string($_POST["direccion"] ?? '');
    $telefono = $conn->real_escape_string($_POST["telefono"] ?? '');
    $paciente = $conn->real_escape_string($_POST["paciente"] ?? '');
    $fechaNacimiento = $conn->real_escape_string($_POST["fechaNacimiento"] ?? '');
    $dni = $conn->real_escape_string($_POST["dni"] ?? '');
    $especie = $conn->real_escape_string($_POST["especie"] ?? '');
    $raza = $conn->real_escape_string($_POST["raza"] ?? '');
    $sexo = $conn->real_escape_string($_POST["sexo"] ?? '');
    $color = $conn->real_escape_string($_POST["color"] ?? '');
    $fechaSeguimientoInicio = $conn->real_escape_string($_POST["fechaSeguimientoInicio"] ?? '');
    $fechaSeguimientoFin = $conn->real_escape_string($_POST["fechaSeguimientoFin"] ?? '');
    $descripcion = $conn->real_escape_string($_POST["descripcion"] ?? '');

    // Preparar la consulta SQL
    $sql = "INSERT INTO clientes (propietario, direccion, telefono, paciente, fechaNacimiento, dni, especie, raza, sexo, color, fechaSeguimientoInicio, fechaSeguimientoFin, descripcion)
    VALUES ('$propietario', '$direccion', '$telefono', '$paciente', '$fechaNacimiento', '$dni', '$especie', '$raza', '$sexo', '$color', '$fechaSeguimientoInicio', '$fechaSeguimientoFin', '$descripcion')";

    // Ejecutar la consulta y manejar la respuesta
    if ($conn->query($sql) === TRUE) {
        echo "<div style='color: green; font-weight: bold;'>Nuevo cliente registrado exitosamente.</div>";
    } else {
        echo "<div style='color: red; font-weight: bold;'>Error al registrar el cliente: " . $conn->error . "</div>";
    }
}

// Cerrar la conexión
$conn->close();
?>
