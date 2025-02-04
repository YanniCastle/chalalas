<?php //include("template/cabeceramenu.php"); //Aqui esta el buscador y el menu
//include ("template/cabeceramenufiltro.php");
include("template/cabeceramenuintento.php"); //Intento
?>

<?php
if (!isset($_GET['enviar'])) {
  include("template/presentacion.php"); //bienvenido

  //include("users/template/galeria1.php"); //Las imagenes 
}
?>

<?php //include("template/piemenu.php");?>
<?php include("pie.html"); ?>