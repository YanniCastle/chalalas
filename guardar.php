<?php
include 'conexion.php';
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$pregunta = strtolower(trim($_POST['pregunta']));
$respuesta = trim($_POST['respuesta']);

// Insertar en la base de datos
$sql = "INSERT INTO responses (user_input, bot_response) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $pregunta, $respuesta);

if ($stmt->execute()) {
    echo '<script type="text/javascript"> alert("¡Pregunta y respuesta guardadas con éxito!"); window.location="preguntasyrespuestas.php";</script>';
    //echo "¡Pregunta y respuesta guardadas con éxito!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>