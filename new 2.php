<?php /*informacion de web php */

$to      = 'yannicastle55@gmail.com';/*A quien va*/
$subject = 'Test de new 2';
$message = 'Saludo de new 2';
$headers = 'From: yannicastle5@gmail.com' . "\r\n" .
      'Reply-To: yannicastle5@gmail.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();/*administrador*/
mail($to, $subject, $message, $headers);
?>