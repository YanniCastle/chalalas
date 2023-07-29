<?php

$paracorreo   = "yannicastle55@gmail.com";/*A quien va*/
$titulo       = "Test directo de chalalas";
$mensaje      = "Saludo de new 1";
$tucorreo     = "From: yannicastle5@gmail.com";/*correo administrador*/
if (mail($paracorreo, $titulo, $mensaje, $tucorreo)) {
    echo "Correo enviado";
} else {
    echo "Error";
}
?>