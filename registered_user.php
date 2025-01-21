<?php include("users/template/cabecera.php"); ?>


<!--Aqui mostrar imagenes de usuario-->
<?php
$login = $_SESSION['usuario'];
$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'");
$valores = mysqli_fetch_array($consulta);
$id = $valores['ID'];
$WhatsApp = $valores['TELEFONO'];/*tratando de usar whats */
$nombre = $valores['NOMBRE'];
$email1 = $valores['MAIL'];
$email2 = $valores['MAIL'];
$email3 = $valores['MAIL'];
$email4 = $valores['MAIL'];


$rutafoto1 = $valores['rutafoto1'];
$rutafoto2 = $valores['rutafoto2'];
$rutafoto3 = $valores['rutafoto3'];
$rutafoto4 = $valores['rutafoto4'];


  ?><?php include("users/template/pie.php"); ?>