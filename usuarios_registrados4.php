<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bienvenido</title>
</head>

<body>

  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
  }
  ?>


  <?php
  echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
  ?>
  <p><a href="usuarios_registrados1.php">Página 1</a></p>
  <p><a href="usuarios_registrados2.php">Página 2</a></p>
  <p><a href="usuarios_registrados3.php">Página 3</a></p>
  <p><a href="cierre.php">cierra sesión</a></p>
</body>

</html>