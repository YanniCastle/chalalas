<?php
session_start();
if (isset($_SESSION["correo"])) {
    $correo = $_SESSION["correo"];
    header("Location: http://chalalas.com/crud8.php?correo=$correo'");
} else {
    echo "No se ha proporcionado un correo electrónico.";
}
?>
