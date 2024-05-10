<?php
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "Sistemas10@";
$base_datos = "tenancy_borys";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los valores de origen y destino desde la solicitud (si están presentes)
$origen = isset($_GET['origen']) ? $_GET['origen'] : null;
$destino = isset($_GET['destino']) ? $_GET['destino'] : null;

// Si se proporcionan origen y destino, realizar una consulta específica
if ($origen !== null && $destino !== null) {
    // Consulta para obtener los horarios correspondientes

    $queryHorarios = "SELECT * FROM tenancy_borys.transporte_programaciones WHERE terminal_origen_id = $origen AND terminal_destino_id = $destino AND active = 1">

    // Ejecutar la consulta
    $resultadoHorarios = $conexion->query($queryHorarios);

    // Verificar si la consulta fue exitosa y devolver los resultados en formato JSON
    if ($resultadoHorarios) {
        $horarios = $resultadoHorarios->fetch_all(MYSQLI_ASSOC);
        echo json_encode($horarios);
    } else {
        echo json_encode(['error' => 'Error en la consulta de horarios: ' . $conexion->error]);
    }

    // Cerrar la conexión y detener la ejecución del script
    $conexion->close();
    exit();
}

// Si no se proporcionan origen y destino, realizar la consulta original
// Consulta para obtener todas las rutas
$query = "SELECT * FROM tenancy_borys.transporte_programaciones WHERE active = 1";

// Ejecutar la consulta
$resultadoRutas = $conexion->query($query);

// Verificar si la consulta fue exitosa y devolver los resultados en formato JSON
if ($resultadoRutas) {
    $rutas = [];
    // Obtener los resultados
    while ($filaRutas = $resultadoRutas->fetch_assoc()) {
        // Consulta para obtener el nombre del terminal de origen
        $queryTerminalOrigen = "SELECT nombre FROM tenancy_borys.transporte_terminales WHERE id = " . $filaRutas['terminal_origen_id'];
        $resultadoTerminalOrigen = $conexion->query($queryTerminalOrigen);

        if ($resultadoTerminalOrigen) {
            $nombreTerminalOrigen = $resultadoTerminalOrigen->fetch_assoc()['nombre'];
        } else {
            $nombreTerminalOrigen = 'Error en la consulta del terminal de origen: ' . $conexion->error;
        }

        // Consulta para obtener el nombre del terminal de destino
        $queryTerminalDestino = "SELECT nombre FROM tenancy_borys.transporte_terminales WHERE id = " . $filaRutas['terminal_destino_id'];
        $resultadoTerminalDestino = $conexion->query($queryTerminalDestino);

        if ($resultadoTerminalDestino) {
            $nombreTerminalDestino = $resultadoTerminalDestino->fetch_assoc()['nombre'];
        } else {
            $nombreTerminalDestino = 'Error en la consulta del terminal de destino: ' . $conexion->error;
        }

        // Agregar los resultados al array de rutas
        $rutas[] = [
            'hora_salida' => $filaRutas['hora_salida'],
            'terminal_origen' => $nombreTerminalOrigen,
            'terminal_destino' => $nombreTerminalDestino
        ];
    }


    // Imprimir los resultados en formato JSON
    echo json_encode($rutas);
} else {
    echo json_encode(['error' => 'Error en la consulta de rutas: ' . $conexion->error]);
}

// Cerrar la conexión
$conexion->close();
?>




