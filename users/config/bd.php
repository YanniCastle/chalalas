<?php
$host = "localhost";
$bd = "pruebas";
$usuario = "root";
$contrasenia = "";
try { //PDO me comunica directamente con BD  01:36:10
  $conexion = new PDO("mysql:host=$host; dbname=$bd", $usuario, $contrasenia);
  if ($conexion) ;//echo "Conectado... a sitio<br/>";
} catch (Exception $ex) {
  echo $ex->getMessage(); //Muestrame el error de conexion
}
?>