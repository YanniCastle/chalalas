<?php 
include("template/cabeceramenufiltro.php"); //Buscador con filtros... ok
include("template/cabeceramenucat.php"); //cabecera con categorias.. ok
//include("template/cabeceramenu.php"); //Aqui esta el buscador y el menu
?>

<?php
if (!isset($_GET['enviar'])) {
  include("template/presentacion.php"); //bienvenido
  include("ofertas2.php"); //ofertas2
  //include("users/template/galeria1.php"); //Las imagenes 
}
?>

<?php //include("template/piemenu.php");?>
<?php include("pie.html"); ?>