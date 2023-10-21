<?php
include("conexion.php");
if (isset($_POST["eliminar_imagen"])) {
  $default = "imagenes/imagenes_chalalas/sin_imagen.jpg";
  $sin_nombre = null;
  $sin_titulo = null;
  $sin_descripcion = null;
  $sin_precio = null;
  $id = 0; //FUNCIONA BIEN,limpia campos de BD y elimina archivo almacenado y carga imagen default//
  $ruta = '';
  $id = $_GET['id'];
  $ruta_imagen1 = $_GET['rutauno'];
  $ruta_imagen2 = $_GET['rutados'];
  $ruta_imagen3 = $_GET['rutatres'];
  $ruta_imagen4 = $_GET['rutacuatro'];
  $sql = "UPDATE usuarios_pass2 SET rutafoto1 ='$default', nombrefoto1='$sin_nombre', titulofoto1='$sin_titulo', descripcionfoto1='$sin_descripcion', preciofoto1='$sin_precio', rutafoto2 ='$default', nombrefoto2='$sin_nombre', titulofoto2='$sin_titulo', descripcionfoto2='$sin_descripcion', preciofoto2='$sin_precio', rutafoto3='$default', nombrefoto3='$sin_nombre', titulofoto3='$sin_titulo', descripcionfoto3='$sin_descripcion', preciofoto3='$sin_precio', rutafoto4='$default', nombrefoto4='$sin_nombre', titulofoto4='$sin_titulo', descripcionfoto4='$sin_descripcion', preciofoto4='$sin_precio' WHERE ID='" . $id . "'";
  $res = mysqli_query($cn, $sql);
  if ($res) {
    unlink($ruta_imagen1);
    unlink($ruta_imagen2);
    unlink($ruta_imagen3);
    unlink($ruta_imagen4);
    echo '<script>alert("Eliminado Correctamente"); window.location="usuarios_registrados3.php";</script>';
  }
} else {
  echo "No se pudo reiniciar tu cuenta.";
}
