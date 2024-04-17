<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  header("location:../../index.php");
}
include '../../config.php';
$login = $_SESSION['usuario'];
$consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'");
$valores = mysqli_fetch_array($consulta);

$id = $valores['ID'];
?>

<!doctype html>
<html lang="es">

<head>
  <title>Articulos de usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <!--Redireccion -->
  <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/"  ?>


  <!--Cabecera de Administrador-->
  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="#">Articulos de usuario<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>/registered_user.php">inicio</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">articulos</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>/cierre.php">Cerrar</a>
    </div>
  </nav>

  <?php echo "<h2>Usuari@: " . $_SESSION["usuario"] . "</h2>"; ?>

  <div class="container">
    <div class="row">