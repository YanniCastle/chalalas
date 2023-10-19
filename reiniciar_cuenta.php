<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalalas.com</title>
  <link rel="stylesheet" href="style1b.css" /><!--barra de menu plegable-->

  <script src="a2dd6045c4.js" crossorigin="anonymous"></script><!--js para iconos-->
  <link rel="stylesheet" type="text/css" href="estilos.css"><!--Iconos -->
  <link rel="stylesheet" type="text/css" href="style4a.css"><!--diseño de columnas-fotos-->
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
  <article id="position">
    <header>
      <div class="ocultar-div">
        <a href="usuarios_registrados3.php"><img src="chalalas2.png"></a>
      </div>
      <div class="ocultar-div2">
        <a><img src="imagenes/chalalas4.png"></a>
      </div>
      <input type="checkbox" id="check">
      <label for="check" class="mostrar-menu">
        &#8801<!--hamburguesa-->
      </label>
      <nav class="menu">
        <a href="cierre.php">cerrar sesión</a>
        <label for="check" class="esconder-menu">
          &#215 <!--la x-->
        </label>
      </nav>
    </header>
  </article>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }
  include 'config.php';

  echo "<br/><br/><br/><h2>¡Bienvenid@, Usuari@ " . $_SESSION["usuario"] . "!<br></h2>";

  $foto = $_SESSION['usuario'];
  //$foto1 = $_SESSION['id'];//ADAPTANDO 
  $id = $_SESSION['usuario'];
  include 'cone2.php';
  $consulta = mysqli_query($con, "SELECT * FROM usuarios_pass2 WHERE USUARIOS= '$id' OR MAIL= '$id'");
  $valores = mysqli_fetch_array($consulta);
  $id = $valores['ID'];
  $nombre = $valores['NOMBRE'];
  $email1 = $valores['MAIL'];
  $email2 = $valores['MAIL'];
  $email3 = $valores['MAIL'];
  $email4 = $valores['MAIL'];
  $rutafoto1 = $valores['rutafoto1'];
  $rutafoto2 = $valores['rutafoto2'];
  $rutafoto3 = $valores['rutafoto3'];
  $rutafoto4 = $valores['rutafoto4'];
  $nombrefoto1 = $valores['nombrefoto1'];
  $nombrefoto2 = $valores['nombrefoto2'];
  $nombrefoto3 = $valores['nombrefoto3'];
  $nombrefoto4 = $valores['nombrefoto4'];

  ?>

  <form method="post" action="reset_cuenta1.php?id=<?php echo $id; ?>& rutauno=<?php echo $rutafoto1; ?>& rutados=<?php echo $rutafoto2; ?>& rutatres=<?php echo $rutafoto3; ?>& rutacuatro=<?php echo $rutafoto4; ?>">
    <table class="uno">
      <tr>
        <td>
          <button type="submit" name="eliminar_imagen">Eliminar foto</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>