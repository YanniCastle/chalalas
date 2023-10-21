<?php
include("conexion.php");
if (isset($_POST["eliminar_imagen"])) {
  $default = "imagenes/imagenes_chalalas/sin_imagen.jpg";
  $sin_nombre = null;
  $sin_titulo = null;
  $sin_descripcion = null;
  $sin_precio = null;
  $id = 0;//FUNCIONA BIEN,limpia campos de BD y elimina archivo almacenado y carga imagen default//
  $ruta = '';
  $id = $_GET['id'];
  $ruta_imagen= $_GET['ruta'];
  $sql = "UPDATE usuarios_pass2 SET rutafoto4 ='$default', nombrefoto4='$sin_nombre', titulofoto4='$sin_titulo', descripcionfoto4='$sin_descripcion', preciofoto4='$sin_precio' WHERE ID='" . $id . "'";
  $res = mysqli_query($cn, $sql);
  if ($res) {
    unlink($ruta_imagen);
    echo '<script>alert("Eliminado Correctamente"); window.location="usuarios_registrados4.php";</script>';
  }
} else {
  echo "No se pudo eliminar la imagen.";
}

