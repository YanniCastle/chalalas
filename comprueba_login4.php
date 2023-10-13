<?php
try { //copiado de:comprueba_login de curso_php, checando en servidor y BD3//
  $login = htmlentities(addslashes($_POST["login"]));
  $password = htmlentities(addslashes($_POST["password"]));
  $contador = 0;
  include('conexion.php');
  //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Las propiedades de la conexion//
  $consulta = "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'";
  $resultado = $base->prepare($consulta);
  $resultado->execute(array(":login" => $login));

  while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
    if (password_verify($password, $registro['PASSWORD'])) {
      $contador++;
    }
  }
  if ($contador > 0) {
    session_start();
    $_SESSION["usuario"] = $_POST["login"];
    $resultado = mysqli_query($conn, $consulta);
    $filas = mysqli_fetch_array($resultado);
    if (null == $filas) {
      echo $login . ", No esta en registros";
    } else
  if ($filas['id_cargo'] > 0) {
      switch ($filas['id_cargo']) {
        case 1:
          //echo $login . " es administrador";
          header("location:usuarios_registrados1.php");
          break;
        case 2:
          //echo $login . " es Desarrollador nivel 1";
          header("location:usuarios_registrados2.php");
          break;
        case 3:
          //echo $login . " es Usuario registado";
          header("location:usuarios_registrados3.php");
          break;
      } //fin de swicht//
    } //fin del if//
  } //fin de contador//
  else {
    echo '<script type="text/javascript"> alert("Error, ¡revisa tus datos!"); window.location="loginroles.php";</script>';
  }
  mysqli_free_result($resultado); //pertenecen a debajo de contador//
  mysqli_close($conn); //pertenecen a contador//
}
//catch: en caso de que la conexion no tenga exito//
catch (Exception $e) {
  die("Error: " . $e->getMessage());
} finally {
  $base = null;
}
