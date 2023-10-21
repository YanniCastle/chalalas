<!--/////Borrar todo/////////////////-->
<?php
include("conexion.php");
if (isset($_POST["eliminar_imagen"])) {
  $id = 0;
  $ruta = '';
  $id = $_GET['id'];
  $ruta_imagen1 = $_GET['rutauno'];
  $ruta_imagen2 = $_GET['rutados'];
  $ruta_imagen3 = $_GET['rutatres'];
  $ruta_imagen4 = $_GET['rutacuatro'];
  $sql = "DELETE FROM usuarios_pass2 WHERE ID='" . $id . "'";
  $res = mysqli_query($cn, $sql);
  if ($res) {
    unlink($ruta_imagen1);
    unlink($ruta_imagen2);
    unlink($ruta_imagen3);
    unlink($ruta_imagen4);
    echo '<script>alert("Eliminado Correctamente"); window.location="adios.php";</script>';
  }
} else {
  echo "No se pudo eliminar tu cuenta.";
}
?>
