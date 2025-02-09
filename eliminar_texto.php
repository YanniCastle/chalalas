<?php
include 'config.php';
if (isset($_POST["eliminar_texto"])) {
  
  $id = 0;
  $id = $_GET['id'];
  $id_texto = $_GET['id_texto'];
  $sql = "DELETE FROM comentarios WHERE ID_USER =$id  AND  Id =$id_texto ";
  $res = mysqli_query($con, $sql);
  if ($res) {
    echo '<script>alert("Eliminado Correctamente"); window.location="Formulario.php";</script>';
  }
} else {
  echo "No se pudo eliminar el texto.";
}
