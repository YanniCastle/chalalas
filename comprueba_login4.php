<?php
try {
  $login = htmlentities(addslashes($_POST["login"]));
  $password = htmlentities(addslashes($_POST["password"]));
  $contador = 0;
  include('conexion.php');
  //$base = new PDO("mysql:host=localhost; dbname=u909812438_chalalas3", "u909812438_root3", "QWERTYu55443");
 // $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //, TELEFONO= :login//
  $sql = "SELECT ID, USUARIOS, MAIL, PASSWORD, id_cargo FROM usuarios_pass2 WHERE USUARIOS= :login OR MAIL= :login";
  $resultado = $base->prepare($sql); 
  $resultado->execute(array(":login" => $login));

  while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
    if (password_verify($password, $registro['PASSWORD'])) {
      $contador++;
    }
  }
  if ($contador > 0) {
    session_start();
    $_SESSION["usuario"] = $_POST["login"];
    include('conexion.php');
$consulta = "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$login' OR MAIL= '$login'";
    $resultado = mysqli_query($conn, $consulta);
    $filas = mysqli_fetch_array($resultado);
    if (null == $filas) {
      echo $login . ", No esta en registros";
    } else
  if ($filas['id_cargo'] > 0) {
      switch ($filas['id_cargo']) {
        case 1:
          header("location:usuarios_registrados1.php");
          break;
        case 2:
          header("location:usuarios_registrados2.php");
          break;
        case 3:
          header("location:usuarios_registrados3.php");
          break;
      } //fin de switch//
    } //fin del if//
  } //fin de contador//
  else {
    echo '<script type="text/javascript"> alert("Error, ¡revisa tus datos!"); window.location="login.php";</script>';
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
