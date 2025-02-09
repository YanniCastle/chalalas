<?php include("template/cabeceramenu.php"); //Aqui esta el buscador y el menu
?>

<?php
if ($con->connect_errno) {
  die("Ha ocurrido un error");
}

include 'config.php';
$tus_articulos = mysqli_query($con, "SELECT * FROM comentarios");

if ($tus_articulos->num_rows > 0) {
  while ($articulo = $tus_articulos->fetch_array()) {
    $titulo = $articulo['Titulo'];
    $comentario = $articulo['Comentario'];
    $fecha= $articulo['Fecha'];
    $ID_TEXTO = $articulo['Id'];
  $ID_USER = $articulo['ID_USER'];

  $consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE ID= '$ID_USER'");
  $valores = mysqli_fetch_array($consulta);
        $id = $valores['ID'];//Este dato sirve para borrar comentario
  $Usuario = $valores['USUARIOS'];

    echo $Usuario . ", dice:";
    echo "<h3>Titulo:" . $titulo . "</h3>";
    echo "<h4>comenta:<div style='width:300px'>" . $comentario . "</h4></div>";
    echo $fecha;
?>

<hr width="200" color="green" align="left"><br>
<?php } } ?>
<?php include("template/piemenu.php"); ?>