<?php
// tu_script.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    $fecha = $_POST["fecha"];

    // Realizar consultas en la base de datos o alguna lógica para obtener horarios de salidas
    $result = obtenerHorarios($origen, $destino, $fecha);

    // Enviar correo electrónico con los detalles
    enviarCorreo($origen, $destino, $fecha, $result);

    // Devolver los resultados como JSON
    echo json_encode($result);
} else {
    // Si la solicitud no es POST, manejar el error
    http_response_code(400);
    echo "Bad Request";
}

// Función para obtener horarios
function obtenerHorarios($origen, $destino, $fecha) {
    // Lógica específica para horarios sin restricciones de hora
    if ($origen == "11" && $destino == "2") { // Moyobamba a Chachapoyas
        // Devuelve horarios sin importar la hora
        $result = [
            ["hora" => "Cualquier Hora", "ruta" => "Ruta A"],
            ["hora" => "Cualquier Hora", "ruta" => "Ruta B"],
            // ... más resultados ...
        ];
    } else {
        // Lógica general para obtener horarios
        // Supongamos que $result contiene los resultados
        $result = [
            ["hora" => "08:00 AM", "ruta" => "Ruta A"],
            ["hora" => "10:00 AM", "ruta" => "Ruta B"],
            // ... más resultados ...
        ];
    }

    return $result;
}

// Función para enviar correo electrónico
function enviarCorreo($origen, $destino, $fecha, $result) {
    $to = "luiscastillo152017@gmail.com";
    $subject = "Consulta de Horarios";
    $message = "Se realizó una consulta de horarios con los siguientes detalles:\n\n";
    $message .= "Origen: $origen\n";
    $message .= "Destino: $destino\n";
    $message .= "Fecha: $fecha\n\n";
    $message .= "Horarios Disponibles:\n";
    
    foreach ($result as $horario) {
        $message .= "Hora: {$horario['hora']}, Ruta: {$horario['ruta']}\n";
    }

    // Enviar correo
    mail($to, $subject, $message);
}
?>
