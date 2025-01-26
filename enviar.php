<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Aquí puedes agregar la lógica para enviar el correo
    $to = "chalalasmx@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo mensaje de contacto: $asunto";
    $body = "Nombre: $nombre\n";
    $body .= "Correo: $email\n";
    $body .= "Mensaje:\n$mensaje\n";

    // Enviar el correo
    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>