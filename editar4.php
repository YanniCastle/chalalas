<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Cambia contraseña</title>
    <link rel="stylesheet" href="style8.css" />
    <link rel="stylesheet" href="stylefoto2.css" />
    <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
<article id="position">
   <nav>
    <ul>
      <li>
        <a href="usuarios_registrados1.php"><img src="imagenes/chalalas4.png"></a>
      </li>
      <li>
        <a href="#">Productos</a>
        <ul>
          <li><a href="comprar.php">Comprar</a></li>
          <li><a href="vender.php">Vender</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Servicios</a>
        <ul>
          <li><a href="buscar.php">buscar</a></li>
          <li><a href="ofrecer.php">ofrecer</a></li>
        </ul>
      </li>

      <li><a href="#">Categorias</a>
        <ul>
          <li><a href="#">categoria 1</a></li>
          <li><a href="#">categoria 2</a></li>
          <li><a href="#">categoria 3</a></li>
          <li><a href="#">categoria 4</a></li>
        </ul>
      </li>

      <li><a href="Formulario.php">Comentarios</a></li>
      <li><a href="fotos.php">Fotos</a></li>
      <li><a href="videos.php">videos</a></li>
      <li><a href="crud2.php">CRUD2</a></li>

      <li><a href="#">Contactos</a>
        <ul>
          <li><a href="#">Whats App</a></li>
          <li><a href="email.php">Email</a></li>
        </ul>
      </li>
      <li><a href="muro.php">Muro</a></li>
      <li><a href="cierre.php">cerrar sesion</a></li>
    </ul>
  </nav>
   </article><br><br>
  <h1>Escribe tu nueva contraseña</h1>
  <?php /*
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
  }*/
  ?>
  <?php

  include("conexion.php");

  if (!isset($_POST["bot_actualizar"])) {

    $Id = $_GET["Id"];
    $pas = $_GET["pas"];
  } else {
    $Id = $_POST["id"];
    $pas = $_POST["pas"];
//aqui agregar el codigo de registrar.php y encriptar
$pass_cifrado = password_hash($pas, PASSWORD_DEFAULT, array("cost" => 12));    

$sql = "UPDATE usuarios_pass2 SET Password=:miPas WHERE Id=:miId";

    $resultado = $base->prepare($sql);   //":miPas" => $pas//
    $resultado->execute(array(":miId" => $Id, ":miPas" => $pass_cifrado));

    header("Location:crud4.php");
  }
  ?>

  <p>

  </p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="25%" border="0" align="center">
      <tr>
        <td></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id" value="<?php echo $Id ?>">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label for="pas"></label>       <!--value="<?php echo $pas ?>"-->
          <input type="text" name="pas" id="pas" value="" placeholder="Nueva contraseña">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>