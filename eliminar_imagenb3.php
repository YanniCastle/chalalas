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
  $sql = "UPDATE usuarios_pass2 SET rutafoto3 ='$default', nombrefoto3='$sin_nombre', titulofoto3='$sin_titulo', descripcionfoto3='$sin_descripcion', preciofoto3='$sin_precio' WHERE ID='" . $id . "'";
  $res = mysqli_query($cn, $sql);
  if ($res) {
    unlink($ruta_imagen);
    echo '<script>alert("Eliminado Correctamente"); window.location="usuarios_registrados3.php";</script>';
  }
} else {
  echo "No se pudo eliminar la imagen.";
}

