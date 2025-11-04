<?php
include 'conexion.php';
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
// Obtener mensaje del usuario
//$userInput = strtolower(trim($_POST['message']));
$userInput = strtolower(trim($_POST['pregunta']));

// Consultar la base de datos
$sql = "SELECT bot_response FROM responses WHERE user_input = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userInput);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo $result->fetch_assoc()['bot_response'];
} else {
    echo "No entiendo, intenta otra pregunta.";
}

$stmt->close();
$conn->close();
?>