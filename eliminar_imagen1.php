<?php
include("conexion.php");
if (isset($_POST["eliminar_imagen"])) {
  $default = "imagenes/imagenes_chalalas/sin_imagen.jpg";
  $id = 0; 
  $ruta = '';
  $id = $_GET['id'];
  $ruta_imagen= $_GET['ruta'];
  $sql = "UPDATE usuarios_pass2 SET foto1 = '$default' WHERE ID='" . $id . "'";
  $res = mysqli_query($cn, $sql);
  if ($res) {
    unlink($ruta_imagen);
    echo '<script>alert("Eliminado Correctamente"); window.location="usuarios_registrados3.php";</script>';
  }
} else {
  echo "No se pudo eliminar la imagen.";
}

