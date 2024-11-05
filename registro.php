<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Clínica Veterinaria</title>
    <link rel="stylesheet" type="text/css" href="styles/registro.css">
</head>
<body>
    <div class="form-container">
        <form action="conexion.php" method="POST">
            <h2>HISTORIA CLÍNICA VETERINARIA & SPA ARIAS.</h2>

            <!-- Información del cliente -->
            <h4>Datos del cliente</h4>
            <div class="pacios-letra">
                <label>Propietario:</label>
                <input type="text" name="propietario" placeholder="Escriba su Nombre" required>
            </div>
            <div class="pacios-letra">
                <label>Dirección:</label>
                <input type="text" name="direccion" placeholder="Escriba su dirección">
            </div>
            <div class="pacios-letra">
                <label>Teléfono:</label>
                <input type="text" name="telefono" placeholder="Escriba su Teléfono" required>
            </div>
            <div class="pacios-letra">
                <label>Nombre de Paciente:</label>
                <input type="text" name="paciente" placeholder="Escriba Nombre" required>
            </div>
            <div class="pacios-letra">
                <label>Fecha de nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>
            <div class="pacios-letra">
                <label>DNI:</label>
                <input type="text" name="dni" placeholder="Escriba el DNI del cliente" required>
            </div>

            <!-- Especie -->
            <h4>Especie</h4>
            <div>
                <label for="Canino">Canino</label>
                <input type="radio" id="Canino" name="especie" value="Canino">
                <label for="Felino">Felino</label>
                <input type="radio" id="Felino" name="especie" value="Felino">
                <label for="Aves">Aves</label>
                <input type="radio" id="Aves" name="especie" value="Aves">
                <label for="Lagomorfos">Lagomorfos</label>
                <input type="radio" id="Lagomorfos" name="especie" value="Lagomorfos">
                <label for="otros">Otros</label>
                <input type="radio" id="otros" name="especie" value="otros">
            </div>

            <!-- Raza y sexo -->
            <h4>Raza</h4>
            <div class="pacios-letra">
                <label>Raza:</label>
                <input type="text" name="raza" placeholder="Qué raza es" required>
            </div>
            <div>
                <label for="Sexo">Sexo:</label>
                <input type="radio" name="sexo" id="masculino" value="masculino"> ♂
                <input type="radio" name="sexo" id="femenino" value="femenino"> ♀
            </div>
            <div class="pacios-letra">
                <label>Color:</label>
                <input type="text" name="color" placeholder="Color de la mascota" required>
            </div>

            <!-- Seguimiento -->
            <h3>ANAMNESIS</h3>
            <div class="pacios-letra">
                <label for="fechaSeguimientoInicio">Fecha de inicio:</label>
                <input type="date" id="fechaSeguimientoInicio" name="fechaSeguimientoInicio">
            </div>
            <div class="pacios-letra">
                <label for="fechaSeguimientoFin">Fecha de finalización:</label>
                <input type="date" id="fechaSeguimientoFin" name="fechaSeguimientoFin">
            </div>

            <button type="button" id="btndescripcion">Descripción</button>
            <div id="notas"></div>
            
            <div class="submit-group">
                <button type="submit">Enviar datos</button>
                <!-- Campo oculto para la descripción que se enviará al servidor -->
                <input type="hidden" name="descripcion" id="descripcion">
            </div>
        </form>
    </div>
    <script src="scripts/registro.js"></script>
</body>
</html>


