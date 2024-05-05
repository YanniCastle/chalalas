<?php include("template/cabeceramenu.php"); //Aqui esta el buscador y el menu
?>

<?php
if (!isset($_GET['enviar'])) {
  include("template/presentacion.php"); //bienvenido

  include("users/template/galeria1.php"); //Las imagenes 
}
?>

<?php include("template/piemenu.php"); //Pendiente:reglas i condiciones de uso, soporte. etc.
?>